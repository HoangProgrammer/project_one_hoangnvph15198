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
require_once ('../global.php');    
require_once ('../models/pdo.php');
require_once ('../dao/RatingDB.php');
require_once ('../dao/Friend.php');



if(isset($_POST['action']) && $_POST['action']=="friend_request"){
    $id_friend = $_POST['id_friend'];
    $time =date('Y-m-d H:i:s');
    fiend_request($id_user,$id_friend,$time);
}



if(isset($_POST['action']) && $_POST['action']=="accept"){
    $id_friends = $_POST['id_friends'];
    accept_Friend($id_user,$id_friends);
    delete_sender( $id_friends);
}

if(isset($_POST['action']) && $_POST['action']=="accept_check"){
    $toID = $_POST['toID'];
    accept_Friend($id_user,$toID);
    delete_sender( $toID);
}


if(isset($_POST['action']) && $_POST['action']=='delete_request'){
    $toID = $_POST['toID'];
    delete_request($toID) ;
}


if(isset($_POST['action']) && $_POST['action']=='cancel_request'){
    $toID = $_POST['toID'];
    delete_receiver($toID) ;
}

if(isset($_POST['action']) && $_POST['action']=='remove_friend'){
    $toID = $_POST['toID'];
    delete_Friend($toID) ;
}






if(isset($_POST['content'])){
    $content =$_POST['content'];
    $rating =$_POST['rating'];
    $id_user =$_POST['id_user'];
    $child =$_POST['child'];
    $time = date('Y-m-d H:i:s');  
    insert_Rating($id_user,$child, $content,$time,$rating);
  } 

  if(isset($_POST['reply'])){
    $content =$_POST['contentReply'];
    $user_id =$_POST['user_id'];
    $child =$_POST['child'];
    $time = date('Y-m-d H:i:s');   
    insert_Reply($user_id,$child, $content,$time);
    header('location:../RaTing');
  } 

  if(isset($_POST['edit_from'])){
    $content =$_POST['content_edit'];
    $id_edit_rating =$_POST['id_edit_rating'];
    $time = date('Y-m-d H:i:s');   
    update_rating_by_user($id_edit_rating, $content,$time);
    header('location:../RaTing');
  } 

$rating=Get_Rating();

foreach ($rating as $value) :
    if ($value['id_parent'] == 0) :
        $image ='';
        if ($value['image'] == '') {    
            $image = '<img style="width: 100%;height: 100%; border-radius:50%"  src="./image/user_defaul.png">';
        } 
?>
    <div class="c-comment-box">
            
            <div class="c-comment-box__avatar avatar-rating"  style="background-image: url(./image/<?=$value['image']?>)"> <?= $image ?></div>
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
                        <span>
                            <?= $time=get_time($value['time'])  ?></span>
                    </ul>
                </div>

                <div class="c-comment-text" data-idcmt="5288527"><?= $value['content'] ?></div> 
                <?php if($value['id_user']==$id_user){ ?>
            <a href="index.php?act=delete_rating&id=<?=$value['id_Rating']?>" class="delete_rating text-danger " style="cursor: pointer;">x??a</a>
            <a  class="edit_rating text-primary " style="cursor: pointer;">ch???nh s???a</a>      
            
            <form action="site/processAjax.php" method="post" class="form_edit ">
                            <input type="hidden" name="id_edit_rating" id="child" value="<?=$value['id_Rating']?>">
     <div class="c-user-rate-form f-comment-5314009">
                    <textarea name="content_edit" rows="4" placeholder="Vi???t c??u h???i c???a b???n">  </textarea>         
                    <button  type="submit" class="  btn btn-primary" name="edit_from">ch???nh s???a </button>
                </div>
</form>
            <?php } ?>
    
                <?php if ($role == 0) {

                } else { ?>
                    <div class="c-comment-status">
                        <a class="rep_a text-primary "  style="cursor: pointer;">Tr??? l???i</a>

                        <form action="site/processAjax.php" method="post" class="formRep">
                            <input type="hidden" name="user_id" id="user_id" value="<?=$id_user?>">
                            <input type="hidden" name="child" id="child" value="<?=$value['id_Rating']?>">
     <div class="c-user-rate-form f-comment-5314009">
                    <textarea name="contentReply" rows="4" placeholder="Vi???t c??u h???i c???a b???n">
                    </textarea>
                 
                    <button  type="submit" class="  btn btn-primary" name="reply">Tr??? L???i </button>
                </div>
</form>

      

   <span  class="er text-warning">  </span>
                  
                    </div>
                <?php     } ?>
             
            </div>
        </div>
        <div id="manga">
        </div>
        <?php foreach ($rating as $val) :
            if ($val['id_parent'] == $value['id_Rating']) :
        ?>
                <div class="c-comment-box level2">
                    <!-- <div class="c-comment-box__avatar">VTH</div> -->
                    <div class="c-comment-box__content">
                        <div class="c-comment-name"><?= ucfirst($val['ten_user']) ?> <span class="badge badge-primary">Qu???n tr??? vi??n</span>
                            <div class="time"><?=$time=get_time($val['time'])?></div>
                        </div>
                        <div class="c-comment-text" data-idcmt="5288542">
                            <p>Ch??o <?= ucfirst($value['ten_user']) ?></p>
                            <p><?= $val['content'] ?></p>
                            <p style="margin-bottom:11px">Th??n m???n!</p>
                        </div>
                        <div class="c-comment-status">
                        </div>
                    </div>
                </div>
        <?php
         endif;
        endforeach; 
        ?>
        
<?php 
endif;
endforeach; ?>

<script>
    $(document).ready(function(){
  $('.formRep').hide();
  $('.form_edit').hide();
$('.rep_a').on('click',function(e) {
  $(this).next().slideToggle(1);
})
$('.edit_rating').on('click',function(e) {
  $(this).next().slideToggle(1);
})


$('.editRating').click(function() {

var parent=$(this).data('edit');

$('#editRating'+parent).slideToggle(1)
}) 


$('.btn-rating').on('click', function(e) {
    e.preventDefault();
   
})
 })
  
</script>




