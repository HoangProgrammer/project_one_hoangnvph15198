<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <h1>Lộ trình cho người mới</h1>
            <p style="font-size:large">Cho dù bạn là người mới bắt đầu hay một người đã có kinh nghiệm đang tìm kiếm các khóa học để nâng cao kỹ năng bản thân và đạt đến mức độ cao hơn trong ngoại ngữ, lộ trình học tập này sẽ giúp bạn đạt được mục tiêu của mình.</p>
            <div class="container_route">
                <?php $data_routes = Get_all_route(); ?>
                    <?php foreach ($data_routes as $key => $value) { ?>
                            <div class="couress">
                            <div class="img"><a href="#"><img src="image/<?php echo $value['img'] ?>" alt=""></a></div>
                            <div class="info">
                                <div class="name">
                                    <h5>Lộ trình giành cho <?php echo $value['route'] ?></h5>
                                    <a href="index.php?act=routee&id_route=<?php echo $value['route'] ?>" class="btn btn-primary">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>
        <div>     
    </div>
    </div>
    

