<?php

if (isset($_GET['lesson'])) {
    $times = date('Y-m-d H:i:s');
    insert_history($id_user, $times, $_GET['lesson']);
}

// delete_oderCourse($_GET['idCourse']);
insert_progress($id_user,$_GET['idCourse']) ; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="site/hoc/cours.css">
    <link rel="stylesheet" href="assets/css/style_user.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<html>

<body cz-shortcut-listen="true">

  <div class="container">
      <br>
   <div>
      <span class="fs-3 mark"><?=$mk=(isset($_SESSION['mark']) ? $_SESSION['mark']:0)?></span> <i class="fs-3 text-warning fa-solid fa-bolt "></i> 
   <a href="/project_one/Tab/Topic/<?=$_GET['idCourse']?>" onclick="return confirm('bạn thực sự muốn thoát chứ !')" class="float-right fs-2"><i class="fa-solid fa-xmark"></i></a>
    </div> 
  </div>
    <?php if (!isset($_GET['quiz'])) {  // kiểm tra có url  thì show ra quiz
    ?>
        <?php
        $conn = connect();
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $number = 1;
        $preRows = ($page - 1) * $number;
        //4-1= 3*10=30
        $sql = getAll_quiz_limit($_GET['lesson'],$preRows, $number);

        $query = "SELECT * FROM quiz where id_lesson=" . $_GET['lesson'] . "";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $total_page = $stmt->rowCount();
        $total_row = ceil($total_page / $number);
        ?>

        <div class=" lesson_tab">

            <?php

            $get_lesson = Get_lesson_one($_GET['lesson']);

            
            foreach ($sql as $value) : extract($value); ?>
                <h1>
                    <?= $question ?>
                </h1>
                <div class="img_quiz">
                    <?php
                    if (!empty($img)) { ?>
                        <img width="100px" height="100%" src="./assets/images/quizs/<?= $img ?>" alt="no-img">
                    <?php }
                    ?>

                </div>
                <br>


                <div aria-label="choice" role="radiogroup" class="_3ry9w _9qT-e _2jUcI">
                    <button   class="_3C_oC _2bJln _2-OmZ ones " role="radio" data-id="<?= $id_quiz ?>" data-test="a">
                        <span class="_2R_o5 _2S0Zh _28sjs">1</span>
                        <div class="_3R7Gt C6wiC text-dark " dir="ltr"><?= $Selectiona ?></div>
                    </button>
                    <button   class="_3C_oC _2bJln _2-OmZ " role="radio" data-id="<?= $id_quiz ?>" data-test="b">
                        <span class="_2R_o5 _2S0Zh _28sjs">2</span>
                        <div class="_3R7Gt C6wiC text-dark" dir="ltr"><?= $Selectionb ?></div>
                    </button>
                    <button   class="_3C_oC _2bJln _2-OmZ " role="radio" data-id="<?= $id_quiz ?>" data-test="c">
                        <span class="_2R_o5 _2S0Zh _28sjs">3</span>
                        <div class="_3R7Gt C6wiC text-dark" dir="ltr"><?= $Selectionc ?></div>
                    </button>
                    <button   class="_3C_oC _2bJln _2-OmZ " role="radio" data-id="<?= $id_quiz ?>" data-test="d">
                        <span class="_2R_o5 _2S0Zh _28sjs">4</span>
                        <div class="_3R7Gt C6wiC text-dark" dir="ltr"><?= $Selectiond ?></div>
                    </button>
                </div>
            <?php endforeach; ?>


        </div>
        <input type="hidden" id="chose">
        <input type="hidden" id="id_da">
        <input type="hidden" id="id_user" value="<?=$id_user ?>">


        <div class="border_error  bg-primary">
            <div class="continue_border">
                <?php
                if ($page == $total_row) { ?>
                    <a class="btn btn-dark finishTest" href="/project_one/Tab/Topic/<?=$_GET['idCourse']?>"> Kết Thúc</a>
                    <button class=" check-finish btn btn-secondary text-light" disabled>Kiểm Tra</button>
                <?php } else { ?>
                    <button class=" check-finish btn btn-secondary text-light" disabled>Kiểm Tra</button>
                    <a class="btn btn-secondary opacity-0 page" href="index.php?act=learn&idCourse=<?= $_GET['idCourse'] ?>&lesson=<?= $_GET['lesson'] ?>&page=<?= $page + 1 ?>"> Tiếp Theo </a>

                <?php } ?>
            </div>
        </div>
    <?php }    ?>
    <!-- $_SESSION['success_or_failed'] -->

    <input class="t" type="hidden" value="<?= $_GET['lesson'] ?>">
    <div class=opacity-0 id="q">

</div>
    <!-- <div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div>
    <div class="fixed-button"><a href="https://codedthemes.com/item/datta-able-premium/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</a> </div> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="assets/js/vendor-all.min.js"></script> -->
    <script type="text/javascript" src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/js/pcoded.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $('.finishTest').hide()
        $('._2-OmZ').click(function() {

            var chose = $(this).data('test');
            var id = $(this).data('id');
            $('#chose').val(chose)
            $('#id_da').val(id)
       
            $('.bg-primary').removeClass('bg-primary');
            $(this).addClass('bg-primary')
            $('.check-finish').removeAttr('disabled', 'disabled')
            $('.check-finish').removeClass('btn-secondary')
            $('.check-finish').addClass('btn-danger')
        })

        $('._3R7Gt').click(function() {
            $('.text-light').removeClass('text-light')
            $(this).addClass('text-light')
        })



        $('.check-finish').click(function() {
            $('._2-OmZ').attr('disabled', 'disabled')
            let chose =$('#chose').val()
            let act = "check"
            let id =  $('#id_da').val()
            let id_user=$('#id_user').val()
            $.ajax({
                url: "site/hoc/question_ajax.php",
                method: 'POST',
                data: {
                    chose: chose,
                    act: act,
                    id: id,
                    id_user:id_user
                },
                success: function(data) {
                    console.log(data);
                    $('#q').html(data);
                    $('.check-finish').hide()
                    $('.finishTest').show();
               $('.page').removeClass('opacity-0')
               $('.mark').html(data)
               
            //    window.location.href="index.php?act=learn&idCourse=<?= $_GET['idCourse'] ?>&lesson=<?= $_GET['lesson'] ?>&page=<?= $page + 1 ?>";
                }
            })
        })














        $('.accept_btn').on('click', function(e) {
            e.preventDefault();
            toID = $(this).data('friend')
            var action = "accept";
            //   alert(toID);
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        id_friends: toID,
                        action: action
                    },
                    success: function(data) {
                        $('#accept_friend' + toID).html('các bạn đã trở thành bạn');
                        $('.accept_btn').hide();
                        $('.delete_btn_request').hide();
                    }
                })
            }
        })

        $('.delete_btn_request').on('click', function(e) {
            e.preventDefault();
            var toID = $(this).data('friend')

            var action = "delete_request";
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        toID: toID,
                        action: action
                    },
                    success: function(data) {
                       
                        $('#delete_friend' + toID).html('đã gỡ lời kết bạn');
                        $('.accept_btn').hide();
                        $('.delete_btn_request').hide();
                    }
                })
            }


        })


        $('.formTwo').slideUp();

        $('a.chats').click(function() {

            $(this).next().next().slideToggle();
        })


        $('a.rep_a').click(function() {

            var parent = $(this).data('id');

            $('#form' + parent).slideToggle(1)
        })

        $('a.edit_a').click(function() {

            var parent = $(this).data('edit');

            $('#form_edit' + parent).slideToggle(1)
        })




        $('#user').on("click", function() {
            $('.profile-notification').fadeToggle(500);
            $('.notification').hide()
        })
        $('#bell').on("click", function() {
            $('.notification').fadeToggle(500);
            $('.profile-notification').hide();
        })


        $('#remove_friend').on('click', function(e) {
            e.preventDefault();
            var toID = $(this).data('remove')
            var action = "remove_friend";
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        toID: toID,
                        action: action
                    },
                    beforeSend: function() {
                        return $('#remove_friend').html('......');;
                    },
                    success: function(data) {

                        $('#remove_friend').html('xóa thành công');
                        $('#remove_friend').attr('disabled', 'disabled')

                    }
                })
            }
        })



        $('.accept_btn').on('click', function(e) {
            e.preventDefault();
            toID = $(this).data('friend')
            var action = "accept";
            //   alert(toID);
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        id_friends: toID,
                        action: action
                    },
                    success: function(data) {
                        $('#accept_friend' + toID).html('các bạn đã trở thành bạn');
                        $('.accept_btn').hide();
                        $('.delete_btn_request').hide();
                    }
                })
            }
        })

        $('.delete_btn_request').on('click', function(e) {
            e.preventDefault();
            var toID = $(this).data('friend')

            var action = "delete_request";
            if (toID > 0) {
                $.ajax({
                    url: "site/processAjax.php",
                    method: "POST",
                    data: {
                        toID: toID,
                        action: action
                    },
                    success: function(data) {
                        $('#delete_friend' + toID).html('đã gỡ lời kết bạn');
                        $('.accept_btn').hide();
                        $('.delete_btn_request').hide();
                    }
                })
            }


        })
    </script>
</body>

</html>