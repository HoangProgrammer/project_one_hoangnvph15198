<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
                <div class="container_route">
                    <?php
                        echo "<h1>Lộ trình " . $_GET['id_route'] . "</h1>";
                        foreach ($data_route as $key => $value) {  ?>
                            <div class="couress">
                            <div class="img"><a href="#"><img src="image/<?php echo $value['img'] ?>" alt=""></a></div>
                            <div class="info">
                                <div class="name">
                                    <h5><?php echo $value['NameCaurse'] ?></h5>
                                    <p><?php echo $value['description'] ?></p>
                                    <a href="index.php?act=detail_course&id_course=<?php echo $value['id_caurse'] ?>" class="btn btn-primary">Chi tiết khóa học</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            
        <div>     
    </div>
    

