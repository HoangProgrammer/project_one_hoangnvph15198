<div class="pcoded-main-container">
        <div class="pcoded-module">
<div id="blog_modal" class="" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bài Viết Của Bạn</h5>
                            
                        </div>
                        <?php 
                            $id_post = $_GET['id_post'];
                            if(isset($_POST['button1'])){
                                $title = $_POST['title'];
                                $content = $_POST['editor1'];
                                $data = [
                                    'content' => $content,
                                    'title_post' => $title,
                                    'id_post' => $id_post,
                                ];
                                fix_post($data);
                                header('Location:index.php?act=my_blog');
                            }

                            $row = get_one_post($id_post);
                        ?>
                        <form action="" method="POST" class="modal-body">
                            <div class="form-group">
                                <input type="text" name="title" id="user_name" value="<?php echo $row['title_post'] ?>" class="form-control" placeholder="Tiêu Đề" />
                            </div>
                            <div class="form-group">

                            <textarea name="editor1" ><?php echo $row['content'] ?></textarea>   

                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" name="button1" class="btn btn-primary" id="save_blog">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            </div>

            </div>