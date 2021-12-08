<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <?php 
            if (isset($_SESSION['user']['route'])) {
                $id_route = $_SESSION['user']['route'];
            
            if ($id_route == null) {
                echo "<h3>Bạn chưa có lộ trình</h3>";
            } 
             else { 
                $data_route = Get_course_by_route($id_route);
                echo "<h1>Lộ trình học " . $value['route'] . "</h1>";
                // echo "<pre>";
                // var_dump($data_route);die;
                ?>
                <div class="container_route">
                    <?php foreach ($data_route as $key => $value) { ?>
                            <div class="couress">
                            <div class="img"><a href="#"><img src="image/<?php echo $value['img'] ?>" alt=""></a></div>
                            <div class="info">
                                <div class="name">
                                    <h5><?php echo $value['NameCaurse'] ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }} ?>

            <?php 
            if (isset($_SESSION['admin'])) {
                $id_route = $_SESSION['admin']['route'];
            
            if ($id_route == null) {
                echo "<h3>Bạn chưa có lộ trình</h3>";
            } 
             else { 
                $data_route = Get_course_by_route($id_route);
                echo "<h1>Lộ trình học " . $value['route'] . "</h1>";
                // echo "<pre>";
                // var_dump($data_route);die;
                ?>
                <div class="container_route">
                    <?php foreach ($data_route as $key => $value) { ?>
                            <div class="couress">
                            <a href="#"><img src="image/<?php echo $value['img'] ?>" alt=""></a>
                            <div class="info">
                                <div class="name">
                                    <h5><?php echo $value['NameCaurse'] ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }} ?>
            
        <div>     
    </div>
    

