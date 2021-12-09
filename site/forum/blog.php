<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">

        <div>
                <span class="_2mNT6">
            <button class="_2pnz9 _2NzLI QHkFc btn_blog" style="background: rgb(17 110 238); border-color: rgb(17 110 238); color: rgb(255, 255, 253);">Bài đăng mới</button>
        </span>     
    </div>

<h1>Diễn Đàn  Bussuu</h1>
<br>
<ul class="_1UYQp" id="ul">
<li class="_7dkF0"><h2 ><a class="likes_post _26Aq_ _35ADQ" > Ưa thích nhiều nhất</a></h2></li>
<li class="_7dkF0"><h2 ><a class="news_posts _26Aq_ ">Mới</a></h2></li>
<!-- <li class="_7dkF0"><h2 ><a class="follows  _26Aq_ " >Đã theo dõi</a></h2></li> -->
</ul>

<br>
<div id="news" style="display: none; padding-bottom:50px">
<?php $get_new_post=get_new_post();
foreach ($get_new_post as $value):
    $get_comment_post=get_comment_post($value['id_post']);
        
     $count=   count($get_comment_post);
    
?>
<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="image/<?=$value['image']?>" rel="nofollow">
    <img alt="" class="_34uU0 _1hNyT" src="image/<?=$value['image']?>">
</a></span></span>

    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1"> <?= $count?></span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div>
    </div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="index.php?act=detail_blog&id_post=<?= $value['id_post']?>"><?=$value['title_post']?></a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021"><?=$value['time']?></span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644"><?=$value['ten_user']?></a></span>
        </span>
    </div>
</div>

    </div>
    <?php endforeach; ?>

</div>
<div id="follows" style="display: none; padding-bottom:50px">
<H1>Trống</H1>
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
        </span>
        <?php $get_comment_post=get_comment_post($value['id_post']);
        
     $count=   count($get_comment_post);
        ?>
        
        <div class="_1a3Pv">
            <div class="_24xio"><span class="mvAh1"><?= $count?></span>
                <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg">
            </div>
        </div>
        <div class="_2Nbkz">
            <h3>
                <a class="_3ZcIW" href="forum/comment/<?= $value['id_post'] ?>"><?php echo $value['title_post'] ?></a>
            </h3>
            <div class="_2I7YD">
    
                <span class="_1xBLK" itemprop="dateCreated" ><?=get_time($value['time'])?></span>
                <span class="_2D8L4">
                    <span>
                    từ 
                    <a class="text-primary"><?=$value['ten_user']?></a>
                    </span>
                </span>
            </div>
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
                        
                        <form action="index.php?act=add_post" method="POST" class="modal-body">
                            <div class="form-group">
                                <input type="text" name="title" id="user_name" class="form-control" placeholder="Tiêu Đề" />
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

        //  const location =location.href;
        //  const menu=document.querySelectorAll('_26Aq_');
        //  const menuLenght =menu.length
        //  for (var i = 1; i <=menuLenght;i++){
        //      if(menu[i].href===location  ){
        //         menu[i].className="_35ADQ"
        //      }
        //  }

        function timeSince(date) {

var seconds = Math.floor((new Date() - date) / 1000);

var interval = seconds / 31536000;

if (interval > 1) {
  return Math.floor(interval) + " years";
}
interval = seconds / 2592000;
if (interval > 1) {
  return Math.floor(interval) + " months";
}
interval = seconds / 86400;
if (interval > 1) {
  return Math.floor(interval) + " days";
}
interval = seconds / 3600;
if (interval > 1) {
  return Math.floor(interval) + " hours";
}
interval = seconds / 60;
if (interval > 1) {
  return Math.floor(interval) + " minutes";
}
return Math.floor(seconds) + " seconds";
}

var aDay = 24*60*60*1000;
console.log(timeSince(new Date(Date.now()-aDay)));
console.log(timeSince(new Date(Date.now()-aDay*2)));


</script>
