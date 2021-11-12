<?php

function connect() {
    $user="root";
    $password="";
    $dbname="du_an_1";

    $con= new PDO('mysql:host=localhost;dbname='.$dbname, $user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
    if($con==true){
        return $con;
    }else{
        return false;
    }

}

/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */

function get_all($sql){
 $conn= connect();

 $stmt= $conn->prepare($sql);

$stmt->execute();
$rows=array();
while($row=$stmt->fetchAll(\PDO::FETCH_ASSOC)){
    $rows[]=$row;
}
return $rows;

}


function executeData($sql){
 $conn= connect();
 $stmt= $conn->prepare($sql);
$stmt->execute();
if($stmt==true){
    return true;
}else{
    return false;
}
}


function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


function pdo_execute2($data){
    $conn = connect();
    $sql = "UPDATE khach_hang SET ho_ten = :ho_ten, mat_khau = :mat_khau,".
                        " hinh = :hinh, kich_hoat= :kich_hoat, email= :email, vai_tro = :vai_tro ".
                        " WHERE ma_kh = :ma_kh ";
                        $statement = $conn->prepare($sql);

                        $statement->execute($data);
    
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function listdm_all(){
    $sql = "SELECT * FROM loai order by ma_loai DESC";
    $rows = pdo_query($sql);
    return $rows;
}
function getAll_tk(){
    $conn = connect();

    $sql = "SELECT COUNT(*) AS so_luong, l.ma_loai, l.ten_loai, MIN(h.don_gia) AS gia_min, MAX(h.don_gia) as gia_max, AVG(h.don_gia) as gia_tb ".
           " FROM hang_hoa AS h".
           " JOIN loai AS l".
           " ON h.ma_loai = l.ma_loai".
           " GROUP BY l.ma_loai, l.ten_loai";
    $stm=$conn->prepare($sql);
    $stm->execute([]);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    
    $data=[];
    while (true) {
        $rowData = $stm->fetch();
        // var_dump($rowData);die;
        if ($rowData === false) {
            break;
        }

        $row = [
            "so_luong" => $rowData['so_luong'],
            "ma_loai" => $rowData['ma_loai'],
            "ten_loai" => $rowData['ten_loai'],
            "gia_min" => $rowData['gia_min'],
            "gia_max" => $rowData['gia_max'],
            "gia_tb" => $rowData['gia_tb']
        ];

        array_push($data, $row);
    }

    return $data;
}
function getAllDm(){
    $conn = connect();

    $sql = "SELECT * FROM loai";
    $stm=$conn->prepare($sql);
    $stm->execute([]);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    
    $data=[];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData === false) {
            break;
        }

        $row = [
            "ma_loai" => $rowData['ma_loai'],
            "ten_loai" => $rowData['ten_loai']
        ];

        array_push($data, $row);
    }

    return $data;
    // var_dump($data);die;
}
function getAllKh(){
    $conn = connect();

    $sql = "SELECT * FROM khach_hang";
    $stm=$conn->prepare($sql);
    $stm->execute([]);
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    
    $data=[];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData === false) {
            break;
        }

        $row = [
            'ma_kh' => $rowData['ma_kh'],
            'ten' => $rowData['ho_ten'],
            'email' => $rowData['email'],
            'kich_hoat' => $rowData['kich_hoat'],
            'hinh' => $rowData['hinh'],
            'vai_tro' => $rowData['vai_tro'],
            'mat_khau' => $rowData['mat_khau'],
        ];

        array_push($data, $row);
    }

    return $data;
}
function update_pass($data) {
    $conn = connect();

    $sql = "UPDATE khach_hang SET ho_ten = :ho_ten, mat_khau = :mat_khau,".
    " hinh = :hinh, kich_hoat= :kich_hoat, email= :email, vai_tro = :vai_tro ".
    " WHERE ma_kh = :ma_kh ";

    $statement = $conn->prepare($sql);

    $statement->execute($data);
}



?>