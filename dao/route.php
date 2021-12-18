<?php
    function findById($id) {
        $conn = connect();
        $sql = "SELECT * FROM routee WHERE id_route = :id";
        $statement = $conn->prepare($sql);
        $params = [
            'id' => $id,
        ];
    
        $statement->execute($params);
        $rowData = $statement->fetch();
        // echo "<pre>";
        // var_dump($rowData);die;
        $data = [];
        if ($rowData != false) {
            $data = [
                "id_route" => $rowData['id_route'],
                "route" => $rowData['route'],
                "img" => $rowData['img'],
            ];
        }
    
        return $data;
    }

    function update_route($data) {
        $conn = connect();
    
        $sql = "UPDATE routee SET route = :route, img=:img ".
        " WHERE id_route = :id_route ";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute($data);

        header('location: index.php?action=route');
    }

    function delete_route($id){
        $con = connect();
        $sql = "delete from routee where id_route=:id";
        $stm = $con->prepare($sql);
        $stm->execute(['id'=>$id]);
        header('location: index.php?action=route');

    }

    function add_route($param){
        $con = connect();

        $sql = "INSERT INTO routee(id_route, route, img) " .
        " VALUES (:id_route, :route, :img)";
    
        $stm = $con->prepare($sql);
        $stm->execute($param);

        return true;
    }

    function uproute_course($id){
        $con = connect();
        $sql = "UPDATE course SET id_route = null" .
        " WHERE id_route=:id";
        $stm = $con->prepare($sql);
        $stm->execute(['id'=>$id]);
    }

?>