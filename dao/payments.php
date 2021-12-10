<?php
    function getAll_payments(){
        $conn=connect();
        $stmt= $conn->prepare("SELECT t.*, u.*, c.*  FROM thanh_toan t inner join user u on t.id_user = u.id_user inner join course c on t.id_caurse = c.id_caurse ");
        $stmt->execute();
        $rows = $stmt -> fetchAll();
        return $rows;
    }

    function insert_payments($data){
        $conn=connect();
            $stmt=$conn->prepare("INSERT INTO thanh_toan(id_order,money,note,bank,id_user,time,id_caurse,trang_thai )  VALUES(:id_order,:money,:note,:bank,:id_user,:time,:id_caurse,:trang_thai ) ");   
            $stmt->execute($data);
        return true;
    }

    function getAll_ordercaurse(){
        $conn=connect();
        $stmt= $conn->prepare("SELECT * FROM ordercaurse ");
        $stmt->execute();
        $rows = $stmt -> fetchAll();
        return $rows;
    }

    function insert_ordercaurse($data){
        $conn=connect();
            $stmt=$conn->prepare("INSERT INTO ordercaurse(id_user,id_caurse,payments,time )  VALUES(:id_user,:id_caurse,:payments,:time ) ");   
            $stmt->execute($data);
        return true;
    }

    function delete_ordercaurse($id_payments){
        $conn=connect();
            $stmt=$conn->prepare("DELETE * FROM thanh_toan WHERE id_payments = :id_payments ");   
            $stmt->execute(['id_payments' => $id_payments]);
        return true;
    }

    function number_rows_ordercaurse($data){
        $conn=connect();
        $stmt= $conn->prepare("SELECT * FROM ordercaurse WHERE id_caurse = :id_caurse AND id_user = :id_user ");
        $stmt->execute($data);
        $number_of_rows = $stmt->fetchColumn();
        return $number_of_rows;
    }
    function number_rows_thanh_toan($data){
        $conn=connect();
        $stmt= $conn->prepare("SELECT * FROM thanh_toan WHERE id_caurse = :id_caurse AND id_user = :id_user ");
        $stmt->execute($data);
        $number_of_rows = $stmt->rowCount();
        return $number_of_rows;
    }
    function getAll_one_payments($id_user){
        $conn=connect();
        $stmt= $conn->prepare("SELECT t.*, u.*, c.*  FROM thanh_toan t inner join user u on t.id_user = u.id_user inner join course c on t.id_caurse = c.id_caurse WHERE t.id_user = :id_user");
        $stmt->execute(['id_user' => $id_user]);
        $rows = $stmt -> fetchAll();
        return $rows;
    }
    function update_payments($data){
        $conn=connect();
        $stmt= $conn->prepare("UPDATE thanh_toan SET trang_thai = :trang_thai WHERE id_payments = :id_payments");
        $stmt->execute($data);
        $rows = $stmt -> fetchAll();
        return $rows;
    }
    
?>