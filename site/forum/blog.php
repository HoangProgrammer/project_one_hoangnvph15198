<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">

        <div>
                <span class="_2mNT6">
            <button class="_2pnz9 _2NzLI QHkFc btn_blog" style="background: rgb(17 110 238); border-color: rgb(17 110 238); color: rgb(255, 255, 253);">Bài đăng mới</button>
        </span>     
    </div>

<h1>Diễn Đàn Ngôn Ngữ Bussuu</h1>
<br>
<ul class="_1UYQp" id="ul">
<li class="_7dkF0"><h2 ><a class="likes_post _26Aq_ _35ADQ" > Ưa thích nhiều nhất</a></h2></li>
<li class="_7dkF0"><h2 ><a class="news_posts _26Aq_ ">Mới</a></h2></li>
<li class="_7dkF0"><h2 ><a class="follows  _26Aq_ " >Đã theo dõi</a></h2></li>
</ul>

<br>
<div id="news" style="display: none; padding-bottom:50px">
<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
</a></span></span>
    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1">7</span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div></div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="index.php?act=detail_blog">Ummm ghi thế này ![](link ảnh) nó k ra cái j thì sao ặ</a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644">phngkhnh704644</a></span>
        </span>
    </div>
</div>

    </div>
</div>
<div id="follows" style="display: none; padding-bottom:50px">
<H1>Trống</H1>
</div>

<div id="likes">
<?php
    $rows = getAll_post();
    foreach ($rows as $key => $value) {
        
?>
    <div>
        <span class="_27Sfq">
            <span class="UI5NM">
                <a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
                <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
                </a>
            </span>
        </span>
        <div class="_1a3Pv">
            <div class="_24xio"><span class="mvAh1">7</span>
                <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg">
            </div>
        </div>
        <div class="_2Nbkz">
            <h3>
                <a class="_3ZcIW" href="index.php?act=detail_blog&id_post=<?= $value['id_post'] ?>"><?php echo $value['title_post'] ?></a>
            </h3>
            <div class="_2I7YD">
    
                <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
                <span class="_2D8L4">
                    <span>
                    từ 
                    <a href="https://www.duolingo.com/profile/phngkhnh704644"><?php if(isset($_SESSION['admin'])){ echo $_SESSION['admin']; }  ?> abc</a>
                    </span>
                </span>
            </div>
        </div>

    </div>
<?php } ?>

<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
</a></span></span>
    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1">7</span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div></div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="/comment/53746558">Ummm ghi thế này ![](link ảnh) nó k ra cái j thì sao ặ</a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644">phngkhnh704644</a></span>
        </span>
    </div>
</div>

    </div>
<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
</a></span></span>
    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1">7</span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div></div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="/comment/53746558">Ummm ghi thế này ![](link ảnh) nó k ra cái j thì sao ặ</a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644">phngkhnh704644</a></span>
        </span>
    </div>
</div>

    </div>
<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
</a></span></span>
    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1">7</span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div></div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="/comment/53746558">Ummm ghi thế này ![](link ảnh) nó k ra cái j thì sao ặ</a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644">phngkhnh704644</a></span>
        </span>
    </div>
</div>

    </div>
<div>
    <span class="_27Sfq"><span class="UI5NM"><a href="https://www.duolingo.com/profile/phngkhnh704644" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/phngkhnh704644" class="_34uU0 _1hNyT" src="//duolingo-images.s3.amazonaws.com/avatars/840755176/nu60ecRheR/large">
</a></span></span>
    <div class="_1a3Pv">
        <div class="_24xio"><span class="mvAh1">7</span>
        <img class="_1CjUZ" src="//duolingo-forum-web.duolingo.com/images/comments.svg"></div></div>
        <div class="_2Nbkz"><h3><a class="_3ZcIW" href="/comment/53746558">Ummm ghi thế này ![](link ảnh) nó k ra cái j thì sao ặ</a>
    </h3><div class="_2I7YD">
      
            <span class="_1xBLK" itemprop="dateCreated" title="14:23, 15 tháng 11, 2021">7 phút trước</span>
            <span class="_2D8L4"><span>từ 
                <a href="https://www.duolingo.com/profile/phngkhnh704644">phngkhnh704644</a></span>
        </span>
    </div>
</div>

    </div>


    </div>





    </div>
        </div>

    </div>
</div>



<!-- modal -->

<?php
    if(isset($_POST['button'])){
        $title = $_POST['title'];
        $content = $_POST['editor1'];
        $time = date("Y-m-d H:i:s");
        $interactions = 1;
        
        $data=[
            'id_user' => $id_user,
            'content' => $content,
            'time' => $time,
            'interactions' => $interactions,
            'title_post' => $title,
        ];
        insert_post($data);
    }

?>

<div id="blog_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bài Viết Của Bạn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span id="closes_blog">&times;</span>
                            </button>
                        </div>
                        
                        <form action="" method="POST" class="modal-body">
                            <div class="form-group">
                                <input type="text" name="title" id="user_name" class="form-control" placeholder="Tiêu Đề" />
                            </div>
                            <div class="form-group">
                            <textarea name="editor1" >

                            </textarea>
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

</script>
