<?php
    if(isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];
        $rows = get_one_post($id_post);
    }

?>

<div class="pcoded-main-container">
<div class="main-body">


    <div class="pcoded-wrapper">
        <div class="pcoded-content">
        
        <div class="row">
<div class="col-lg-8">
<div itemprop="mainEntity" itemscope="" itemtype="http://schema.org/Question"><meta content="170" itemprop="answerCount">
<div class="B6oqy">
    <ol typeof="BreadcrumbList" vocab="https://schema.org/">
        <li class="_2dkQa" property="itemListElement" typeof="ListItem">
            <a class="_3MoiQ" property="item" typeof="WebPage" href="/">
    <span property="name">Diễn đàn</span></a><meta content="1" property="position">
</li><span class="_3N8KI">&gt;</span>
    <li class="_2dkQa" property="itemListElement" typeof="ListItem">
        <span property="name"><?php echo $rows['title_post'] ?></span>
        <meta content="3" property="position"></li>
    </ol>
 
        </div><hr><span class="_2jJPk">
                <span class="UI5NM"><a href="https://www.duolingo.com/profile/Suri90997-1" rel="nofollow">
                    <img alt="https://www.duolingo.com/profile/Suri90997-1" class="_34uU0 _1sRb7 U95Un" src="//duolingo-images.s3.amazonaws.com/avatars/827246444/7GUVEyBATK/large"></a></span></span><div class="_3eQwU"><h1 dir="ltr" itemprop="name"><?php echo $rows['title_post'] ?></h1><div class="_3x6h2"><div class="_38HQY"><a class="_16l38" href="https://www.duolingo.com/profile/Suri90997-1" itemprop="author" itemscope="" itemtype="https://schema.org/Person" rel="nofollow">
                        <span itemprop="name">Suri90997-1</span></a><span><div class="_21NtT">
           
</div></span></div></div>
<div class="_2povu" itemprop="text"> 
    <?php echo $rows['content'] ?>
</div>
<!-- <div class="_2povu" itemprop="text"><p>Hi!</p>
    <p>Bạn đã chán những kiểu viết thông thường trên Duolingo? Bạn muốn làm cho bài đăng, phần bình luận của mình thêm sinh động với những kiểu chữ khác nhau? Bài viết này sẽ giúp bạn thực hiện được điều đó.</p>
    <p>1) Để tạo khoảng cách giữa hai đoạn văn:</p>
    <p>Sau khi nhập xong đoạn văn thứ nhất, các bạn nhấn phím Enter 2 lần, sau đó nhập tiếp đoạn văn thứ hai. Tiếp tục làm như vậy cho các đoạn văn tiếp theo cho đến khi nhập hết bài.</p>
    <p>2) Để in nghiêng chữ:</p>
    <p>Các bạn nhập 1 dấu * hoặc _ trước và sau nội dung muốn in nghiêng.</p>
    <p>bạn sẽ được <em>nội dung</em></p>
    <p>III) Để in đậm chữ:</p>
    <p>Các bạn nhập 2 dấu * trước và sau nội dung muốn in đậm. bạn sẽ được <strong>nội dung</strong></p>
    <p>3) <code>Để highlight chữ</code>: Các bạn thêm ` trước và sau đoạn muốn highlight.</p>
    <p>. Bạn sẽ đc <code>nội dung</code></p>
    <p>V) Để phóng to chữ:</p>
    <p>Kiểu 1: Gõ hai dấu ##  trước nội dung muốn hiển thị</p>
    <p>bạn sẽ được:</p>
    <h2>Nội dung</h2>
    <p>Kiểu 2:Gõ ba dấu ###  trước nội dung muốn hiển thị</p>
    <p>bạn sẽ được:</p>
    <h3>nội dung</h3>
    <p>4) In mờ:Gõ sáu dấu ######  trước nội dung muốn hiển thị</p>
    <p>bạn sẽ được:</p>
    <h6>nội dung</h6>
    <p>5) Để tạo cột trích dẫn: Nhập &gt; trước câu muốn tạo trích dẫn</p>
    <p>Riêng phần bình luận, sau khi đã nhập nội dung phần bình luận, chọn mục Sửa và thêm &gt; phía trước các câu muốn tạo trích dẫn. Tùy vào bạn muốn tạo mục trích dẫn có bao nhiêu vạch phía trước, thì thêm bấy nhiêu dấu &gt;</p>
    <p>bạn sẽ được:</p>
    <blockquote>
    <p>nội dung</p>
    </blockquote>
    <p>6) Để tạo link trích dẫn, dẫn nguồn: 
    Các bạn nhập:[ tên muốn hiển thị ] (link bài đăng)</p>
    <p>7) Để đăng hình ảnh: </p>
    <p>Các bạn nhập: ![](link ảnh)</p>
    <p>8) Để tạo vạch ngăn cách giữa các đoạn văn: Nhập 3 hoặc 4 dấu gạch ngang ____</p>
</div> -->

    </div>
    <div class="_1DQz6"><div>
<?php
    if(isset($_POST['button'])){
        $comment = $_POST['comment'];
        $id_parent = 1 ; 
        $time = date("Y-m-d H:i:s");
        $data =[
            'id_user' => $id_user,
            'id_post' => $id_post,
            'content' => $comment,
            'id_parent' => $id_parent,
            'time' => $time,
        ];
        insert_comment_post($data);
    }
?>
<form action="" method="POST" class="_287pv">
    <div class="_3o9OB"><span class="UI5NM">
        <a href="https://www.duolingo.com/profile/hoang150521" rel="nofollow">
    <img alt="https://www.duolingo.com/profile/hoang150521" class="_34uU0 _1sRb7 U95Un" src="//duolingo-images.s3.amazonaws.com/avatars/698129379/nOBnxOurQg/large"></a></span></div><div class="_1KvMS"><div>
        <textarea class="_1Ch3x _2yvtl gFN2J" dir="auto" name="comment" placeholder="Gửi một bình luận mới"></textarea>
        <div>
            <button name="button" class="_1qPrY _2pnz9 _2NzLI QHkFc" style="background: rgb(28, 176, 246); border-color: rgb(24, 153, 214); color: rgb(255, 255, 253);">Đăng</button>
            <span class="_3cCqs">
                <button name="cancel" class="_3kaGF _1O1Bz _2NzLI QHkFc" style="background: rgb(255, 255, 253); border-color: rgb(229, 229, 229); color: rgb(175, 175, 175);">Hủy</button>
            </span>
        </div>
    </div>
</div>
</form></div></div>
<?php
    $count = count_comment_post($id_post);
?>
<div class="L3O-V"><div class="_3Ub4w">
        <h2 class="Gm8SO"><span class=""><?php echo $count['so_luong'] ?> Nhận xét</span></h2>
    <?php 
        $rows = getAll_comment_post($id_post);
        foreach ($rows as $key => $value) {
            
    ?>
        <div class="container-tab-cmt-ask">
            <div class="container-tab-cmt-ask-img">
                <img src="../assets/images/logo-thumb.png" alt="">
            </div>
            <div class="container-tab-cmt-ask-text">
                <span><?php echo $value['content'] ?></span>
            </div>
        </div>
        <?php } ?>


    <div class="_1sdFi"><span class="_2uOAb"><span class="_3JSl4">
        <span class="LuNpf">Sắp xếp theo bài đăng<span class="_1_rbe _2APmR _2LVH3 _1-HHf cCL9P _1-HHf">

    </span></span></span></span></div></div><div></div></div></div>
</div>
<div class="col-lg-4">
<section class="PZMcl"><div class="_1TjKD">
  
</div><div class="_2VdVL"><h2 class="_2q02F">Thảo luận liên quan</h2><ul><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/52684660">|Góc_trợ_giúp| Người điều phối diễn đàn là ai?</a></h3><div class="_34sSH">14 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/51655166">NHỮNG BÀI HÁT HAY </a></h3><div class="_34sSH">23 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/53570464">dạo này mn thấy bài đăng của mình hay bị unvote không</a></h3><div class="_34sSH">15 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/52152436">lời xin lỗi của tôi gửi đến những người tham gia diễn đàn scp của tôi và duo.
</a></h3><div class="_34sSH">14 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/52995795">Các định dạng bài đăng</a></h3><div class="_34sSH">6 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/23543070">[Hướng dẫn] Cách định dạng bài đăng</a></h3><div class="_34sSH">0 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/16530264">10 Mẹo học từ vựng tiếng Anh</a></h3><div class="_34sSH">28 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/52428975">Những từ hay ho có thể dùng thay thế cho Yes trong Tiếng Anh</a></h3><div class="_34sSH">44 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/52911542">Những câu châm ngôn hay trong Tiếng Anh </a></h3><div class="_34sSH">3 Nhận xét</div></li><li class="_5DXbf"><h3><a class="_1y1Vb" href="/comment/51601985">Hướng dẫn định dạng bài đăng trên Duolingo</a></h3><div class="_34sSH">22 Nhận xét</div></li></ul></div></section>
</div>


        </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
        </div>
        </div>
        </div>