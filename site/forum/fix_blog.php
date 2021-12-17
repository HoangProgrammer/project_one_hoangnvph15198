                            <style>
                                .cke_contents {
                                    display: block;
                                    overflow: hidden;
                                    height: 1000px !important;
                                }

                                .modal-dialog {

                                    max-width: 1000px;

                                    margin-bottom: 15rem !important;
                                }
                            </style>
                          
                            <?php
                              $id_post = $_GET['id_post'];
                            $row = get_one_post($id_post);

                            ?>

                            <div class="pcoded-main-container">
                                <div class="pcoded-module">
                                    <div id="blog_modal" class="" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Bài Viết Của Bạn</h5>

                                                </div>

                                                <form action="index.html?act=fix_post" method="POST" class="modal-body" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="text" name="title" id="user_name" value="<?= $row['title_post'] ?>" class="form-control" placeholder="Tiêu Đề" />
                                                    </div>
                                                    <input type="hidden" name="id_post" value="<?= $id_post ?>">
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                                        <input type="file" class="form-control" id="inputGroupFile01" name="img">
                                                    </div>
                                                    <img src="image/<?= $row['img'] ?>" width="200" alt="">
                                                    <div class="form-group">

                                                        <textarea name="editor1"><?= $row['content'] ?></textarea>

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