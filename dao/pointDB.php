<?php
function getAll_point_user($id_user, $id_lesson)
{
    $conn = connect();
    $stmt = $conn->prepare("SELECT point.point_total as point_total,point.id_lesson as id_lesson FROM point Where id_user= ? and id_lesson=?");
    $stmt->execute([$id_user, $id_lesson]);
    $rows = array();
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $rows[] = $row;
    }
    return $rows;
}
function getAll_point_by_user($id_user)
{
    $conn = connect();
    $stmt = $conn->prepare("SELECT point.point_total as point FROM point  JOIN user on point.id_user=user.id_user WHERE user.id_user=?");
    $stmt->execute([$id_user]);
    $rows = array();
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $rows[] = $row;
    }
    return $rows;
}

function insert_point($id_user, $mark)
{
    $conn = connect();
    $stmt = $conn->prepare("SELECT point.point_total as point FROM point WHERE id_user=$id_user ");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $stmt = $conn->prepare(" UPDATE point set point_total=point_total+$mark WHERE id_user=$id_user ");
        $stmt->execute();
        return true;
    } else {
        $stmt = $conn->prepare("INSERT INTO point(id_user ,point_total)
         VALUES(:id_user,:point_total)");
        $stmt->execute([":id_user" => $id_user, ":point_total" => $mark]);
        return true;
    }
}


function update_point($mark, $id_lesson, $id_user)
{
    $conn = connect();
    $stmt = $conn->prepare(" UPDATE point set point_total=:point_total  WHERE id_lesson =:id_lesson and id_user=:id_user");
    $stmt->execute([":point_total" => $mark, ":id_lesson" => $id_lesson, ":id_user" => $id_user]);
    return true;
}

function delete_point($id_lesson, $id_user)
{
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM point WHERE id_lesson =:id_lesson and id_user=:id_user");
    $stmt->execute([":id_lesson" => $id_lesson, ":id_user" => $id_user]);
    return true;
}


function delete_point_by_lesson($id_lesson)
{
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM point WHERE id_lesson=?");
    $stmt->execute([$id_lesson]);
    return true;
}
