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
                                                        <button type="reset" name="cancel" class="_3kaGF _1O1Bz _2NzLI QHkFc" style="background: rgb(255, 255, 253); border-color: rgb(229, 229, 229); color: rgb(175, 175, 175);padding:10px">Hủy</button>
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
                // echo '<prev>';
                // var_dump(getAll_comment_post($_GET['id_post']));
                // echo '</prev>';
                $datas = getAll_comment_post_by_user($_GET['id_post']);

                function get_comments_post_fuc($data, $parent = 0 ,$user)
                {
                    $arr=array();
                    echo  "<ul style='margin-left:5%;'>";

                    foreach ($data as $key => $val) {
                        extract($val);
                        $display='';
                        $displays='';                     
                        $image = '';
                        if ($val['anh'] == '') {    
                            $image = '<img style="width: 100px;height: 100%; border-radius:50%"  src="./image/user_defaul.png">';
                        } 


                        if ($val['id_parent'] == $parent) {  // nếu id_parent==0
                            if($val['id_user']==$user){
                                $display= '<a onclick=" return confirm("bạn có chắc chắn muốn xóa không !") " class="text-danger" href="index.php?act=delete_cm_forum&id_comment='.$val['id_comment'].'&id_post='.$_GET['id_post'].'">xóa</a>';
                                          
                                $displays='<a data-edit='.$id_comment.'  class="edit_a text-primary "style="cursor: pointer;">sửa</a>    ';
                            }
                            
                            echo '<li>
                                                <div class="c-comment-box c-forum">   
                                                <div class="c-comment-box__avatar avata_forum"  style="background-image: url(./image/'. $val['anh'].')">' . $image . ' </div>
                                                <div class="c-comment-box__content">
                                                    <div class="c-comment-name"> ' . ucfirst($ten) .'<p style="margin-left:10px" class="text-secondary">'. get_time($time).' </p>  </div>      
                                                    <div class="c-comment-text" data-idcmt="5288527">' . $content_cm . '</div>                                       
                                                        <div class="c-comment-status">
                                                        <div class="c-comment-rep-p">  
                                                                  <a data-id='.$id_comment.'  class="rep_a text-primary "style="cursor: pointer;">Trả lời</a>   
                                                                  '.$displays.'                                           
                                                                  '. $display.'                                                     
                                                         </div>   
                                                           
                                                         
                                                            <form id="form'.$id_comment.'" style="display:none;" action="index.php?act=rep_forum" method="post" class="formRep">                               
                                                                <input type="hidden" name="child" id="child" value="'.$id_comment.'">
                                                                <input type="hidden" name="id_post" id="child" value="'.$_GET['id_post'].'">
                                                <div class="c-user-rate-form f-comment-5314009">
                                                        <textarea dir="auto" id="content" name="contentReply" rows="4" placeholder="Viết câu hỏi của bạn"> </textarea>
                                                          <p class="err"></p>                                          
                                                        <button type="submit" class="reply  btn btn-primary" name="reply">Trả Lời </button>
                                                      
                                                    </div>
                                                </form>
                                                        
                                                            <form id="form_edit'.$id_comment.'" style="display:none;" action="index.php?act=edit_post" method="post" class="formRep">                               
                                                                <input type="hidden" name="id_comment" id="child" value="'.$id_comment.'">
                                                                <input type="hidden" name="id_post" id="child" value="'.$_GET['id_post'].'">
                                                <div class="c-user-rate-form f-comment-5314009">
                                                        <textarea dir="auto" id="content" name="content" rows="4" placeholder="Viết câu hỏi của bạn"> </textarea>
                                                          <p class="err"></p>                                          
                                                        <button type="submit" class="edit_cm_post  btn btn-primary" name="edit">Trả Lời </button>
                                                    </div>
                                                </form>
                                                
                                                <span  class="er text-warning">  </span>
                                                      
                                                        </div>     
                                                </div>     
                                                </div> ';

                            $id = $val['id_comment'];  // id comment
                            get_comments_post_fuc($data, $id ,$user);
                            // .......
                        
                          
                        }

                    }
                    echo "<li>";
                    echo  "</ul>";
               
                }

                get_comments_post_fuc($datas, $parent = 0,$user=$id_user);
              
                // function delete($data,$id_post){
                //     foreach($data as $val){
                //         if($val['id_comment_post']==$id_post){
                            
                //         }
                //     }            
                // }
                ?>
                

</div>
                    </div>
<!-- bài viết liên quan -->


                    <div class="col-lg-4">
                        <section class="PZMcl">
                            <div class="_1TjKD">

                            </div>
                            <div class="_2VdVL">
                                <h4 class="_2q02F">Bài Viết Ấn Tượng</h3>
                                <ul>
                                    <?php $get_post_other=get_post_other($_GET['id_post']);
                                    foreach($get_post_other as $value){ extract($value)?>
  <li class="_5DXbf">
                                        <h3> <a class="_1y1Vb" href="forum/comment/<?=$id_post?>"><?=$title_post?></a>
                                        </h3>
                                        <div class="_34sSH"><?=$comment?> Nhận xét</div>
                                    </li>
                                   <?php }?>
                                    
                                  
                                </ul>
                            </div>
                        </section>
                    </div>
                    
                </div>


                <script>
                    $(document).ready(function() {
                        $('a.rep_a').click(function() {

                          var parent=$(this).data('id');
                          
                          $('#form'+parent).slideToggle(1)
                        })     
                        
                        $('a.edit_a').click(function() {

                          var parent=$(this).data('edit');
                          
                          $('#form_edit'+parent).slideToggle(1)
                        })     
                    })
                </script>

























            </div>
        </div>
    </div>
</div>