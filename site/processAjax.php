<?php 
session_start();
if(isset($_SESSION['user'])){
    $id_user=$_SESSION['user']["id"];
    $role=0;
    }else

  if(isset($_SESSION['admin'])){
    $id_user=$_SESSION['admin']["id"];
    $role=1;
    }
    
require_once ('../models/pdo.php');
require_once ('../dao/RatingDB.php');

if(isset($_POST['content'])){
    $content =$_POST['content'];
    $rating =$_POST['rating'];
    $id_user =$_POST['id_user'];
    $child =$_POST['child'];
    $time = date('D-m-y H:i:s');   
    insert_Rating($id_user,$child, $content,$time,$rating);
  } 



$rating=Get_Rating();

foreach ($rating as $value) :
    if ($value['id_parent'] == 0) :
?>
        <div class="c-comment-box">
            
            <div class="c-comment-box__avatar">BV</div>
            <div class="c-comment-box__content">
                <div class="c-comment-name"><?= ucfirst($value['ten_user']);?></div>
                <div class="list-star">
                    <ul>
                        <ul>
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                if ($value['rating'] >= $i) { ?>
                                    <li data-index="1">
                                        <i class="fas fa-star text-warning  mr-1 main_star"></i>
                                    </li>
                                <?php    } else { ?>
                                    <li data-index="2">
                                        <i class="fas fa-star text-dark  mr-1 main_star"></i>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                        <span><?= $value['time'] ?></span>
                    </ul>
                </div>
                <div class="c-comment-text" data-idcmt="5288527"><?= $value['content'] ?></div>
                <?php if ($role == 0) {
                } else { ?>
                    <div class="c-comment-status">
                        <a class="text-primary" style="cursor: pointer;">Trả lời</a>
                    </div>
                <?php     } ?>

            </div>
        </div>
        <?php foreach ($rating as $val) :
            if ($val['id_parent'] == $value['id_Rating']) :
        ?>
                <div class="c-comment-box level2">
                    <!-- <div class="c-comment-box__avatar">VTH</div> -->
                    <div class="c-comment-box__content">
                        <div class="c-comment-name"><?= ucfirst($val['ten_user']) ?><span class="badge badge-primary">Quản trị viên</span>
                            <div class="time">3 giờ trước</div>
                        </div>
                        <div class="c-comment-text" data-idcmt="5288542">
                            <p>Chào <?= ucfirst($value['ten_user']) ?></p>
                            <p><?= $val['content'] ?></p>
                            <p style="margin-bottom:11px">Thân mến!</p>
                        </div>
                        <div class="c-comment-status">
                        </div>
                    </div>
                </div>
        <?php endif;
        endforeach; ?>
<?php endif;
endforeach; ?>





