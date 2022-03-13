<div id="main">
    <div class="head">
        <div class="col-div-6">
            <!-- <p class="nav"> create movie</p> -->
        </div>
        <div class="col-12">

            <form action="index.php?action=add_quizFROM" method="POST" enctype="multipart/form-data">
                <div id="add_course_modal">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Thêm bài Tập</h5>
                                <a type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                    <span id="closes">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                <!-- <a href="course/add_pr.php">ha</a> -->
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>Câu hỏi </h6>
                                    </label>
                                    <input type="text" name="question" class="form-control" />
                                    <p class="text-danger error_name"> <?php if (isset($_SESSION['question'])) {
                                                                            echo $_SESSION['question'];
                                                                            unset($_SESSION['question']);
                                                                        } ?> </p>

                                    <input type="hidden" name="id_lesson" class="form-control" value="<?= $_GET['id_lesson'] ?>" />
                                    <input type="hidden" name="id_course" value=<?= $_GET['idCourse'] ?>>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label "  for="">Img</label>
                                    <input  class="form-control" type="file" name="img">
                                </div>
                                 <br>
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>lựa chọn 1 </h6>
                                    </label>
                                    <input type="text" name="Selection1" class="form-control" />
                                    <p class="text-danger error_name"> <?php if (isset($_SESSION['Selection1'])) {
                                                                            echo $_SESSION['Selection1'];
                                                                            unset($_SESSION['Selection1']);
                                                                        } ?> </p>


                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>lựa chọn 2 </h6>
                                    </label>
                                    <input type="text" name="Selection2" class="form-control" />
                                    <p class="text-danger error_name"> <?php if (isset($_SESSION['Selection2'])) {
                                                                            echo $_SESSION['Selection2'];
                                                                            unset($_SESSION['Selection2']);
                                                                        } ?> </p>


                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>lựa chọn 3 </h6>
                                    </label>
                                    <input type="text" name="Selection3" class="form-control" />
                                    <p class="text-danger error_name"> <?php if (isset($_SESSION['Selection3'])) {
                                                                            echo $_SESSION['Selection3'];
                                                                            unset($_SESSION['Selection3']);
                                                                        } ?> </p>


                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>lựa chọn 4 </h6>
                                    </label>
                                    <input type="text" name="Selection4" class="form-control" />
                                
                                </div>
                                <div class="form-group">
                                    <label class="form-label " for="">
                                        <h6>đáp Án Đúng </h6>
                                    </label>
                                    <div class="form-group">

                                        A <input type="radio" name="answer" width="100px" value="a" /> <br>
                                        B <input type="radio" name="answer" width="100px" value="b" /> <br>
                                        C <input type="radio" name="answer" width="100px" value="c" /><br>
                                        D <input type="radio" name="answer" width="100px" value="d" />

                                    </div>
                                    <p class="text-danger error_name"> <?php if (isset($_SESSION['answer'])) {
                                                                            echo $_SESSION['answer'];
                                                                            unset($_SESSION['answer']);
                                                                        } ?> </p>


                                </div>


                                <div class="form-group text-center mt-4">
                                    <!-- <input type="submit" name="btn_course" value="thêm"> -->
                                    <button name="btn_course" class="btn btn-primary">Thêm</button>
                                    <a href="index.php?action=quiz&id_lesson=<?= $_GET['id_lesson'] ?>&idCourse=<?= $_GET['idCourse'] ?>" class="btn btn-primary">quay lại</a>
                                </div>



                            </div>



                        </div>


                    </div>


                </div>

            </form>

        </div>


    </div>
</div>