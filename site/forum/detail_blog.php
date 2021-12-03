<?php
if (isset($_GET['id_post'])) {
    $id_post = $_GET['id_post'];

    $rows = get_one_by_user($id_post);
}

?>

<div class="pcoded-main-container forum_content">
    <div class="main-body">


        <div class="pcoded-wrapper">
            <div class="pcoded-content">

                <div class="row">
                    <div class="col-lg-8">
                        <div itemprop="mainEntity" itemscope="" itemtype="http://schema.org/Question">
                            <meta content="170" itemprop="answerCount">
                            <div class="B6oqy">
                                <ol typeof="BreadcrumbList" vocab="https://schema.org/">
                                    <li class="_2dkQa" property="itemListElement" typeof="ListItem">
                                        <a class="_3MoiQ" property="item" typeof="WebPage" href="/">
                                            <span property="name">Diễn đàn</span></a>
                                        <meta content="1" property="position">
                                    </li><span class="_3N8KI">&gt;</span>
                                    <li class="_2dkQa" property="itemListElement" typeof="ListItem">
                                        <span property="name"><?php echo $rows['title_post'] ?></span>
                                        <meta content="3" property="position">
                                    </li>
                                </ol>

                            </div>
                            <hr><span class="_2jJPk">
                                <span class="UI5NM">
                                    <a href="https://www.duolingo.com/profile/Suri90997-1" rel="nofollow">
                                        <img class="_34uU0 _1sRb7 U95Un" src="./image/<?= $rows['image'] ?>"></a>
                                </span>
                            </span>
                            <div class="_3eQwU">
                                <h1 dir="ltr" itemprop="name"><?php echo $rows['title_post'] ?>
                                </h1>
                                <div class="_3x6h2">
                                    <div class="_38HQY"><a class="_16l38" href="https://www.duolingo.com/profile/Suri90997-1">
                                            <span itemprop="name"><?= $rows['ten_user'] ?></span>
                                        </a>
                                        <span>
                                            <div class="_21NtT">

                                            </div>
                                        </span>
                                    </div>
                                </div>
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
                            <div class="_1DQz6">
                                <div>
                                    <?php
        
                                    ?>
                                    <form action="index.php?act=comment_post" method="POST" class="_287pv">
                                        <div class="_3o9OB"><span class="UI5NM">
                                                <a href="https://www.duolingo.com/profile/hoang150521" rel="nofollow">
                                                    <img alt="https://www.duolingo.com/profile/hoang150521" class="_34uU0 _1sRb7 U95Un" src="//duolingo-images.s3.amazonaws.com/avatars/698129379/nOBnxOurQg/large"></a></span></div>
                                        <div class="_1KvMS">
                                            <div>
                                                <input type="hidden" name='id_post' value="<?= $_GET['id_post']?>>">
                                                <textarea class="_1Ch3x _2yvtl gFN2J" dir="auto" name="comment" placeholder="Gửi một bình luận mới"></textarea>
                                                <div>
                                                    <button name="button" class="_1qPrY _2pnz9 _2NzLI QHkFc" style="background: rgb(28, 176, 246); border-color: rgb(24, 153, 214); color: rgb(255, 255, 253);">Đăng</button>
                                                    <span class="_3cCqs">
                                                        <button name="cancel" class="_3kaGF _1O1Bz _2NzLI QHkFc" style="background: rgb(255, 255, 253); border-color: rgb(229, 229, 229); color: rgb(175, 175, 175);">Hủy</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        <div class>

                        </div>    
                            <?php
                            $count = count_comment_post($id_post);
                            ?>
                            <div class="L3O-V">
                                <div class="_3Ub4w">
                                    <h2 class="Gm8SO"><span class=""><?php echo $count['so_luong'] ?> Nhận xét </span></h2>
                                </div>
                            </div>

                    
                <?php
                $datas = getAll_comment_post_by_user($_GET['id_post']);

                function get_comments_post_fuc($data, $parent = 0)
                {
                    echo  "<ul style='margin-left:5%;'>";
                    foreach ($data as $key => $val) {
                        extract($val);
                        $image = '';
                        if ($val['anh'] == '') {
                            $image = '<img style="width: 100px;height: 100%; border-radius:50%"  src="./image/user_defaul.png">';
                        } else {
                            $image = '<img  style="width: 100px;height: 100%; border-radius:50%" src="./image/' . $val['anh'] . '" alt="">';
                        }
                        if ($val['id_parent'] == $parent) {
                            echo '<li>
                                                <div class="c-comment-box">   
                                                <div class="c-comment-box__avatar"  style="width: 50px;height: 60px;">' . $image . ' </div>
                                                <div class="c-comment-box__content">
                                                    <div class="c-comment-name"> ' . $ten .'<p style="margin-left:10px" class="text-secondary">'. get_time($time).' </p>  </div>      
                                                    <div class="c-comment-text" data-idcmt="5288527">' . $content_cm . '</div>
                                                
                                                        <div class="c-comment-status">
                                                            <a class="rep_a text-primary "  style="cursor: pointer;">Trả lời</a>
                                                
                                                            <form style="display:none;" action="index.php?act=rep_forum" method="post" class="formRep">                               
                                                                <input type="hidden" name="child" id="child" value="'.$id_comment.'">
                                                                <input type="hidden" name="id_post" id="child" value="'.$_GET['id_post'].'">
                                                <div class="c-user-rate-form f-comment-5314009">
                                                        <textarea dir="auto" id="content" name="contentReply" rows="4" placeholder="Viết câu hỏi của bạn"> </textarea>
                                                          <p class="err"></p>                                          
                                                        <button type="submit" class="reply  btn btn-primary" name="reply">Trả Lời </button>
                                                    </div>
                                                </form>
                                                
                                                <span  class="er text-warning">  </span>
                                                      
                                                        </div>     
                                                </div>     
                                                </div> ';

                            $id = $val['id_comment'];
                            get_comments_post_fuc($data, $id);
                        }
                    }
                    echo "<li>";
                    echo  "</ul>";
                }

                get_comments_post_fuc($datas, $parent = 0)
                ?>

</div>
                    </div>
<!-- bài viết liên quan -->


                    <div class="col-lg-4">
                        <section class="PZMcl">
                            <div class="_1TjKD">

                            </div>
                            <div class="_2VdVL">
                                <h2 class="_2q02F">Bài Viết Ấn Tượng</h2>
                                <ul>
                                    <li class="_5DXbf">
                                        <h3> <a class="_1y1Vb" href="/comment/52684660">|Góc_trợ_giúp| Người điều phối diễn đàn là ai?</a>
                                        </h3>
                                        <div class="_34sSH">14 Nhận xét</div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    
                </div>


                <script>
                    $(document).ready(function() {
                        $('a.rep_a').click(function() {

                            $(this).next().slideToggle();
                        })     
                    })
                </script>

























            </div>
        </div>
    </div>
</div>