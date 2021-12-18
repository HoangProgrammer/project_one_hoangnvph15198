<style>
 .cke_contents{
    display: block;
    overflow: hidden;
    height: 700px !important;
}
.modal-dialog {

    max-width: 800px;
 
    margin-bottom: 15rem !important;
}

</style>


<div class="pcoded-main-container" style="margin-bottom: 30px;">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">

        <div>
                <span class="_2mNT6">
            <button class="_2pnz9 _2NzLI QHkFc btn_blog" style="background: rgb(17 110 238); border-color: rgb(17 110 238); color: rgb(255, 255, 253);">Bài đăng mới</button>
            <button class="_2pnz9 _2NzLI QHkFc " style="background: rgb(17 110 238); border-color: rgb(17 110 238); color: rgb(255, 255, 253);"><a style="color:white" href="MyBlog">Bài đăng của tôi</a></button>
        </span>     
    </div>
<h1>Diễn Đàn  Bussuu</h1>
<br>
<ul class="_1UYQp" id="ul">
<li class="_7dkF0"><h2 ><a  class="likes_post _26Aq_ _35ADQ" > Ưa thích nhiều nhất</a></h2></li>
<li class="_7dkF0"><h2 ><a  class="news_posts _26Aq_ " id="new_post">Mới</a></h2></li>
</ul>
<br>


<div id="news" style="display: none; padding-bottom:50px">

<?php $get_new_post=get_new_post();
foreach ($get_new_post as $value):
    $get_comment_post=get_comment_post($value['id_post']);
        
     $count=   count($get_comment_post);
    
?>
<div>
        <span class="_27Sfq">
            <span class="UI5NM">
                <a href="index.html?act=profile&id=<?=$value['id_user']?>" rel="nofollow">
                <?php if( $value['image'] ==''){ ?>
                    <img alt="no image" class="_34uU0 _1hNyT" src="./image/user_defaul.png">

                <?php } else { ?> 
                            <img alt="no image" class="_34uU0 _1hNyT" src="./image/<?=$value['image']?>">
                    <?php }  ?>
        
                </a>
            </span>
            <span class="_2D8L4">
                    <span>
                    <a class="text-primary" style="text-transform: uppercase;color:black !important;font-weight:bold;"><?=$value['ten_user']?></a>
                    </span>
                </span>
        </span>

     <?php $get_comment_post=get_comment_post($value['id_post']);  
     $count=   count($get_comment_post);
        ?>

        <div class="_2Nbkz">
            <div class="tiltle_post">
                <h3>
                    <a class="_3ZcIW" href="forum/comment/<?= $value['id_post'] ?>"><?php echo $value['title_post'] ?></a>
                </h3>
                <div class="wrap_content">
                    <?php echo $value['content']?>
                </div>
            </div>
            <a class="_3ZcIW" href="forum/comment/<?= $value['id_post'] ?>">
            <img style="    height: 170px;  width: 285px;  border-radius: 10px;object-fit: none;" src="./image/<?=$value['img'] ?>" alt="no img"></a>
        </div>
        <!-- time và ng đăng -->
    <div class="" style="border-bottom:2px solid #ccc; padding-bottom:10px">
        <span class="_1xBLK" itemprop="dateCreated" ><?=get_time($value['time'])?></span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg">
        <span class="mvAh1"><?= $count?></span>
    </div>


    </div>
    <?php endforeach; ?>

</div>





<div id="likes">
<?php
    $rows = get_post();

    foreach ($rows as $key => $value) {
        
?>
    <div>
        <span class="_27Sfq">
            <span class="UI5NM">
                <a href="index.html?act=profile&id=<?=$value['id_user']?>" rel="nofollow">
                <?php if( $value['image'] ==''){ ?>
                    <img alt="no image" class="_34uU0 _1hNyT" src="./image/user_defaul.png">

                <?php } else { ?> 
                            <img alt="no image" class="_34uU0 _1hNyT" src="./image/<?=$value['image']?>">
                    <?php }  ?>
        
                </a>
            </span>
            <span class="_2D8L4">
                    <span>
                    <a class="text-primary" style="text-transform: uppercase;color:black !important;font-weight:bold;"><?=$value['ten_user']?></a>
                    </span>
                </span>
        </span>

     <?php $get_comment_post=get_comment_post($value['id_post']);  
     $count=   count($get_comment_post);
        ?>

        <div class="_2Nbkz">
            <div class="tiltle_post">
                <h3>
                    <a class="_3ZcIW" href="forum/comment/<?= $value['id_post'] ?>"><?php echo $value['title_post'] ?></a>
                </h3>
                <div class="wrap_content">
                    <?php echo $value['content']?>
                </div>
            </div>
            <a class="_3ZcIW" href="forum/comment/<?= $value['id_post'] ?>">
            <img style="    height: 170px;  width: 285px;  border-radius: 10px;object-fit: cover;" src="./image/<?=$value['img'] ?>" alt="no img"></a>
        </div>
        <!-- time và ng đăng -->
    <div class="" style="border-bottom:2px solid #ccc; padding-bottom:10px">
        <span class="_1xBLK" itemprop="dateCreated" ><?=get_time($value['time'])?></span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg">
        <span class="mvAh1"><?= $count?></span>
    </div>


    </div>
<?php } ?>

    </div>
    </div>
        </div>

    </div>
</div>





<div id="blog_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bài Viết Của Bạn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span id="closes_blog">&times;</span>
                            </button>
                        </div>
                        
                        <!-- heading -->
                        <form action="index.php?act=add_post" method="POST" class="modal-body"  enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="title" id="user_name" class="form-control" placeholder="Tiêu Đề" />
                            </div>
                            <!-- img -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Ảnh bìa</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="img">
                            </div>
                            <div class="form-group">

                            <textarea name="editor1" > </textarea>   

                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" name="button" class="btn btn-primary" id="save_blog">Đăng</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- <script type="text/javascript" language="javascript">
             $(document).ready(function() {
                $("#btn-submit").click(function(event){
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var number = $("#number").val();
                    var course = $("#course").val();

                    


                });
             });
    </script> -->

<script>

$(document).ready(function() {


           $(".news_posts").on("click",function(){
             $('#news').show();
             $('#likes').hide();
             $('#follows').hide();
         })
           $(".likes_post").on("click",function(){
             $('#likes').show();
             $('#news').hide();          
             $('#follows').hide();
         })

           $(".follows").on("click",function(){
         
             $('#news').hide();
             $('#likes').hide();
             $('#follows').show();



         })
         
$(".btn_blog").on("click",function(){
    $('#blog_modal').modal('show');
})

$("#closes_blog").on("click",function(){
    $('#blog_modal').modal('hide');
})
         
$('a._26Aq_').click(function() {
    $('a._26Aq_._35ADQ').removeClass('_35ADQ');
    $(this).addClass('_35ADQ')

})


});


</script>
