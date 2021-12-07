<?php   
    session_start();
    require_once './../models/pdo.php';
    function findById() {
        if (isset($_GET['gia'])) {
            $gia = $_GET['gia'];
            $conn = connect();
            if ($gia == 0) {
                $sql = "SELECT * FROM course WHERE price = 0 and type = 0";
            }
            else if($gia == 1){
                $sql = "SELECT * FROM course WHERE price != 0 and type != 0";
            }
            $stm = $conn->prepare($sql);
        
            $stm->execute([]);
            $rowData = $stm->fetch();
            $data=[];
            while (true) {
                $rowData = $stm->fetch();
                if ($rowData === false) {
                    break;
                }
        
                $row = [
                    "id_caurse" => $rowData['id_caurse'],
                    "NameCaurse" => $rowData['NameCaurse'],
                    "img" => $rowData['img'],
                    "price" => $rowData['price'],
                    "description" => $rowData['description'],
                    "type" => $rowData['type'],
                ];
        
                array_push($data, $row);
            }
        }
        else {
            $conn = connect();
            $sql = "SELECT * FROM course";
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
                    "id_caurse" => $rowData['id_caurse'],
                    "NameCaurse" => $rowData['NameCaurse'],
                    "img" => $rowData['img'],
                    "price" => $rowData['price'],
                    "description" => $rowData['description'],
                    "type" => $rowData['type'],
                ];
        
                array_push($data, $row);
            }
        }
    
        return $data;
    }
    $courses = findById();
    $_SESSION['seesion_course'] = $courses;
    
?>

                <div class="container_coures">
                        <?php foreach ($courses as $key => $value) { ?>
                        <div class="coures1">
                                <a href=""><img src="./../image/<?php echo $courses[$key]['img'] ?>" alt=""></a>
                                <div class="info">
                                    <div class="name">
                                        <h6><?php echo $courses[$key]['NameCaurse'] ?></h6>
                                    </div>
                                    <div class="coures_info">
                                        <p><?php echo $courses[$key]['description'] ?></p>
                                    </div>
                                    <div class="count_student">
                                        <p><b>Học viên: 8398</b></p>
                                    </div>
                                </div>
                                <div class="more">
                                    <span><a href="/du_an_1/trangchu/coures_detail.php?id_coures=<?php echo $courses[$key]['id_caurse'] ?>" >Xem thêm</a></span>
                                </div>
                            </div>
                        <?php } ?>
                            </div>
                </div>