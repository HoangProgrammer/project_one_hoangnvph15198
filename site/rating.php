<?php

$rating = Get_Rating();

$five_star = 0;
$four_star = 0;
$three_star = 0;
$two_star = 0;
$one_star = 0;
$total_review = 0;
$total_rating = 0;

foreach ($rating as $row) {

    if ($row['id_parent'] == 0) {

        if ($row['rating'] == "5") {
            $five_star++;
        }
        if ($row['rating'] == "4") {
            $four_star++;
        }
        if ($row['rating'] == "3") {
            $three_star++;
        }
        if ($row['rating'] == "2") {
            $two_star++;
        }
        if ($row['rating'] == "1") {
            $one_star++;
        }
        $total_review++;
        $total_rating += $row['rating'];
    }
    $avg_rating = $total_rating /  $total_review;
}


?>

<div class="pcoded-main-container">

    <div class="pcoded-wrapper">

        <div class="pcoded-content">

            <h1 class="mt-5 mb-5">Nhận Xét Và Đánh Giá </h1>
            <div class="card">
                <div class="card-header">Trải nghiệm của bạn</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h1 class="text-warning mt-4 mb-4">
                                <b><span id="average_rating"><?= number_format($avg_rating, 1) ?></span> / 5</b>
                            </h1>
                            <div class="mb-3">
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                            </div>
                            <h4><span id="total_review"><?= $total_review ?></span> đánh giá</h4>
                        </div>
                        <div class="col-sm-4">
                            <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review"><?= $five_star ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_four_star_review"><?= $four_star ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_three_star_review"><?= $three_star ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_two_star_review"><?= $two_star ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_one_star_review"><?= $one_star ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star"></div>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h4 class="mt-4 mb-3">Viết nhận xét Tại Đây</h4>
                            <?php $disabled=''; if($role==1){ $disabled='disabled';}else{ $disabled=''; } ?>
                            <button <?=$disabled?> type="button" name="add_review" id="add_review" class="btn btn-primary">gửi đánh giá của bạn</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="mt-5  review" id="review_content">

                <div id="c-comment-box">
                    <!-- chỗ này không được xóa  xuất ở file processAjax.php-->
                </div>

            </div>
            <!-- review -->

        </div>

    </div>
</div>






<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gửi Nhận Xét</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span id="closes">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="POST" id="form">

                    <h4 class="text-center mt-2 mb-4">
                        <div id="rateYo"></div>
                        <input type="hidden" name="star" id="rating" >
                        <input type="hidden" id="id_user" name="id_user" value="<?=$id_user?>">
                    </h4>

                    <div class="form-group">

                        <textarea cols="20" rows="5" name="content" id="content" class="form-control" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="form-group">
                        <span class="error text-warning">
                            <?php if (isset($err)) {
                                echo $err;
                            } ?>
                        </span>
                    </div>
                    <div class="form-group text-center mt-4">

                        <button name="send" type="submit" id="save_review" class="btn btn-primary">Gửi</button>

                    </div>
                </form>


            </div>


        </div>

    </div>
</div>


<script>
    $(document).ready(function() {
        $('#five_star').css('width', (<?= $five_star /  $total_review ?>) * 100 + "%") // sao / bình luận
        $('#four_star').css('width', (<?= $four_star /  $total_review ?>) * 100 + "%")
        $('#three_star').css('width', (<?= $three_star /  $total_review ?>) * 100 + "%")
        $('#two_star').css('width', (<?= $two_star /  $total_review ?>) * 100 + "%")
        $('#one_star').css('width', (<?= $one_star /  $total_review ?>) * 100 + "%")
        var count = 0;
        $('.main_star').each(function() {
            count++;
            if (<?= $avg_rating ?> >= count) {
                $(this).addClass('text-warning');
            }
        })

        function fetch() {
            $.ajax({
                method: 'post',
                url: "site/processAjax.php",
                success: function(data) {
                    $('#c-comment-box').html(data);
                }
            })
        }

        fetch();
        $('#save_review').on('click', function(e) {
            e.preventDefault();
            var content = $('#content').val();
            var rating = $('#rating').val();
            var id_user = $('#id_user').val(); 
            var child = 0;    
            if (content == "") {
                $('.error').html('vui lòng nhập nội dung');
            }
            else {
                $.ajax({
                     url: "site/processAjax.php",
                    method: "POST",   
                    data: {
                        content: content,
                        rating: rating,
                        id_user: id_user,
                        child: child,
                    },
                    success: function(data) {   
                        $('#review_modal').modal('hide')                  
                        fetch();
                    }
                })
            }

        })



    })
    
</script>