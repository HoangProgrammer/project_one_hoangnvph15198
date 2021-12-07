<?php
    require_once './../dao/courseDB.php';
    require_once './../models/pdo.php';
    $id = $_GET['id'];
    $data = Get_course_one($id);
?>

<div class="container">
                            <?php foreach ($data as $key => $value) { ?>
                            <div class="coures1">
                                    <a href=""><img src="image/<?php echo $data[$key]['img'] ?>" alt=""></a>
                                    <div class="info">
                                        <div class="name">
                                            <h6><?php echo $data[$key]['NameCaurse'] ?></h6>
                                        </div>
                                        <div class="coures_info">
                                            <p><?php echo $data[$key]['description'] ?></p>
                                        </div>
                                        <div class="count_student">
                                            <p><b>Học viên: 8398</b></p>
                                        </div>
                                    </div>
                                    <div class="more">
                                        <span><a href="/du_an_1/trangchu/coures_detail.php?id_coures=<?php echo $data[$key]['id_caurse'] ?>">Xem thêm</a></span>
                                    </div>
                                </div>
                            <?php } ?>
                                    </div>
                    </div>