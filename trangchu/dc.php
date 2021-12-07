<?php
    require_once './../dao/courseDB.php';
    require_once './../models/pdo.php';
    $id = $_GET['id'];
    $data = Get_course_one($id);
?>
<h3 style="padding:20px">Lộ trình học</h3>
<div class="container">
                            <?php foreach ($data as $key => $value) { ?>
                            <div class="couress">
                                    <a href="#"><img src="image/<?php echo $data[$key]['img'] ?>" alt=""></a>
                                    <div class="info">
                                        <div class="name">
                                            <h5><?php echo $data[$key]['NameCaurse'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                    </div>
                    </div>