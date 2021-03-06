<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href="vnpay_php/assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <link rel="stylesheet" href="./assets/css/style_user.css">
    <!-- Bootstrap core CSS -->

    <script src="vnpay_php/assets/jquery-1.11.3.min.js"></script>

</head>

<body>


    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">

                <div class="b-bg" style="margin-left: 5%; ">
                    <svg width="100" height="100" viewBox="0 0 326 102" xmlns="http://www.w3.org/2000/svg">
                        <path d="M107.478 76.11l-.04-51.373h24.996c5.145 0 9.005 1.267 11.581 3.8 2.577 2.534 3.865 5.764 3.865 9.69a13.137 13.137 0 01-1.639 6.636 11.19 11.19 0 01-4.704 4.444v.156a13.026 13.026 0 016.481 4.75 13.287 13.287 0 012.3 7.808 15.782 15.782 0 01-.966 5.618 11.857 11.857 0 01-2.927 4.44 13.662 13.662 0 01-4.968 2.95 20.567 20.567 0 01-6.901 1.063l-27.078.017zm12.99-39.608v8.412h9.81c1.714 0 2.933-.406 3.657-1.219a4.264 4.264 0 001.081-2.95 4.7 4.7 0 00-.966-3.019c-.64-.816-1.897-1.224-3.772-1.224h-9.81zm0 18.613v9.2h11.414c1.875 0 3.186-.448 3.934-1.34a4.797 4.797 0 001.15-3.22 4.68 4.68 0 00-1.26-3.266c-.833-.914-2.104-1.374-3.818-1.368l-11.42-.006zm61.419-17.86h12.075V57.38a24.097 24.097 0 01-1.397 8.562 16.14 16.14 0 01-10.166 9.902 24.46 24.46 0 01-8.051 1.265 25.145 25.145 0 01-8.05-1.213 16.186 16.186 0 01-6.188-3.686 16.563 16.563 0 01-3.984-6.165 24.18 24.18 0 01-1.415-8.625V37.295h12.076v20.126c0 3.094.701 5.313 2.093 6.676a8.335 8.335 0 0010.925 0c1.388-1.365 2.082-3.59 2.082-6.676V37.255zm38.107 11.5a3.073 3.073 0 00-1.369-2.082 5.133 5.133 0 00-2.875-.741c-1.56 0-2.66.314-3.301.943a3.187 3.187 0 00-.96 2.358c0 .891.529 1.518 1.57 1.886 1.271.42 2.575.733 3.899.937 1.552.257 3.241.544 5.066.863 1.761.291 3.469.845 5.066 1.644a10.606 10.606 0 013.898 3.376c1.047 1.464 1.57 3.478 1.57 6.043a11.366 11.366 0 01-1.202 5.227 11.962 11.962 0 01-3.415 4.123 16.576 16.576 0 01-5.342 2.714 23.448 23.448 0 01-6.993.99 23.9 23.9 0 01-6.952-.938 16.188 16.188 0 01-5.302-2.668 12.29 12.29 0 01-3.421-4.025 11.584 11.584 0 01-1.288-5.176h11.874c.058 2.044 1.693 3.063 4.905 3.06 1.932 0 3.226-.288 3.899-.869a3.019 3.019 0 001.006-2.432c0-.891-.523-1.518-1.57-1.886a24.248 24.248 0 00-3.904-.938l-5.06-.862a17.867 17.867 0 01-5.083-1.622 10.72 10.72 0 01-3.905-3.375c-1.046-1.468-1.568-3.483-1.564-6.044a11.474 11.474 0 011.15-5.175 12.698 12.698 0 013.278-4.134 15.096 15.096 0 015.1-2.755 21.587 21.587 0 016.711-.983 21.215 21.215 0 016.676.978 16.003 16.003 0 015.066 2.668 12.169 12.169 0 013.26 4.025 11.674 11.674 0 011.254 4.882l-11.742-.012zm44.363-11.575h12.076v20.126a24.097 24.097 0 01-1.398 8.562 16.138 16.138 0 01-10.166 9.902 24.46 24.46 0 01-8.051 1.265 25.149 25.149 0 01-8.05-1.213 16.246 16.246 0 01-6.17-3.669 16.563 16.563 0 01-3.962-6.193 24.2 24.2 0 01-1.414-8.625V37.209h12.075v20.126c0 3.093.702 5.313 2.093 6.676a8.356 8.356 0 0010.926 0c1.386-1.363 2.087-3.588 2.081-6.682l-.04-20.149zm45.496-.034h12.076v20.126a23.999 23.999 0 01-1.403 8.556 16.136 16.136 0 01-10.167 9.908 24.28 24.28 0 01-8.05 1.259 25.297 25.297 0 01-8.05-1.208 16.261 16.261 0 01-6.171-3.697 16.562 16.562 0 01-3.984-6.164 24.131 24.131 0 01-1.409-8.626V37.174h12.075V57.3c0 3.09.696 5.314 2.088 6.67a8.335 8.335 0 0010.925 0c1.392-1.364 2.086-3.59 2.082-6.675l-.012-20.15zM46.923 56.323a26.704 26.704 0 0020.453-9.385 25.428 25.428 0 006.09-16.491c0-14.307-11.84-25.917-26.48-25.934l-21.11-.04c-11.983-.023-21.73 9.47-21.742 21.2l-.057 51.523c0 .046 1.639-20.873 42.845-20.873z" fill="#116EEE"></path>
                        <path d="M4.077 80.163c0 9.477 7.849 17.165 17.55 17.165h39.102c15.813 0 25.232-11.42 25.249-25.549 0-12.035-6.826-22.11-18.625-24.84a26.706 26.706 0 01-20.43 9.384c-41.207 0-42.846 20.92-42.846 20.873v2.967z" fill="#88B7F7"></path>
                    </svg>
                </div>

            </a>
        </div>
    </header>


    <?php

    $id_caurse = $_GET['id'];



    if (isset($_POST['button'])) {
        $id_oder = $_POST['order_id'];
        $money = $_POST['amount'];
        $name_course = $_POST['name_course'];
        $note = $_POST['order_desc'];
        $bank = $_POST['bank_code'];
        $trang_thai = 0;
        $id_user = $id_user;
        $time = date("Y-m-d H:i:s");

        if (isset($_COOKIE['cart'])) {
            $data_cookie = stripslashes($_COOKIE['cart']);
            $cart_data =json_decode($data_cookie, true,JSON_UNESCAPED_UNICODE) ;
            // giải mã chuỗi đã mã hóa JSON, người ta sử dụng hàm json_decode.
            //   khôi phục dữ liệu đã được mã hoá trở về bản gốc vd : json {a:'1'} => [a]=>int(1)
        } else {
            $cart_data = array();
        }

        if (isset($_SESSION['cart'])) {
            $data_ss= $_SESSION['cart'];
            // giải mã chuỗi đã mã hóa JSON, người ta sử dụng hàm json_decode.
            //   khôi phục dữ liệu đã được mã hoá trở về bản gốc vd : json {a:'1'} => [a]=>int(1)
        } else {
            $data_ss = array();
        }

        array_push($cart_data, array(
            "id_item" => $_GET['id'],
            'id_user' => $id_user,
            'name_course' =>  $name_course,
            'money' => $money,
            'code' => $id_oder,
            'time' => $time,

        ));

        array_push($data_ss, array(
            "id_item" => $_GET['id'],
            'id_user' => $id_user,
            'name_course' =>  $name_course,
            'money' => $money,
            'code' => $id_oder,
            'time' => $time,

        ));
       $_SESSION['cart']=$data_ss;
        setcookie('cart',json_encode( $cart_data,JSON_UNESCAPED_UNICODE), time() + (86400 * 9999));
        // định dạng chuỗi thành dạng json vd :  [a]=>int(1)=>  json {a:'1'} 

        $data = [
            'id_order' => $id_oder,
            'money' => $money,
            'note' => $note,
            'bank' => $bank,
            'id_user' => $id_user,
            'time' => $time,
            'id_caurse' => $id_caurse,
            'trang_thai' => $trang_thai,
        ];

        insert_payments($data);
        $thongbao = "mua hàng thành công, vui lòng đợi admin xác nhận ";
    }





    $row = Get_course_one($id_caurse);
    foreach ($row as $va) {
        $price = $va['price'];
        $name = $va['NameCaurse'];
    }
    $Get_user_one = Get_user_one($id_user);
    foreach ($Get_user_one as $va) {
        extract($va);
    }
    ?>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Thanh Toán Khóa Học</h3>
        </div>

        <div class="table-responsive">
            <form action="" id="create_form" method="post">

                <div class="form-group">
                    <label for="language">Loại hàng hóa </label>
                    <input name="name_course" class="form-control" type="text" value="<?= $name ?>">
                </div>
                <div class="form-group">
                    <label for="order_id">Mã hóa đơn</label>
                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo rand() ?>" />
                </div>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input disabled class="form-control" id="amount" type="text" value="<?= number_format($price, 0, ',') ?>" />
                    <input style="display:none" type="hidden" name="amount" value="<?= $price ?>">
                </div>
                <div class="form-group">
                    <label for="order_desc">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="NCB"> Ngan hang NCB</option>
                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                        <option value="SCB"> Ngan hang SCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                        <option value="MSBANK"> Ngan hang MSBANK</option>
                        <option value="NAMABANK"> Ngan hang NamABank</option>
                        <option value="VNMART"> Vi dien tu VnMart</option>
                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                        <option value="HDBANK">Ngan hang HDBank</option>
                        <option value="DONGABANK"> Ngan hang Dong A</option>
                        <option value="TPBANK"> Ngân hàng TPBank</option>
                        <option value="OJB"> Ngân hàng OceanBank</option>
                        <option value="BIDV"> Ngân hàng BIDV</option>
                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                        <option value="VPBANK"> Ngan hang VPBank</option>
                        <option value="MBBANK"> Ngan hang MBBank</option>
                        <option value="ACB"> Ngan hang ACB</option>
                        <option value="OCB"> Ngan hang OCB</option>
                        <option value="IVB"> Ngan hang IVB</option>
                        <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_id">Tên người dùng</label>
                    <input class="form-control" id="order_id" type="text" value="<?= $ten_user ?>" />
                </div>
                <div class="form-group">
                    <label for="order_id">Email </label>
                    <input class="form-control" id="order_id" type="text" value="<?= $email ?> " />
                </div>

                <button type="submit" name="button" class="btn btn-primary">Xác nhận thanh toán</button>

            </form>

        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY 2015</p>
        </footer>
    </div>
    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet" />

    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php

    if (isset($thongbao)) {
    ?>
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: '<?= $thongbao ?>',
                    icons: "success",
                    width: 600,
                    height: 600,
                    showConfirmButton: false,
                    padding: '3em',
                    color: '#716add',
                    //   background: '#fff url("./image/gif/load.gif")',
                    background: '#fff url("./image/gif/giphy.gif")',
                    timer: 2000
                })
            })
        </script>

    <?php
        header("refresh:2;url=index.html?act=detail_order&id=".$_GET['id']);
    }
    ?>

    <!-- <script type="text/javascript">
            $("#btnPopup").click(function () {
                var postData = $("#create_form").serialize();
                var submitUrl = $("#create_form").attr("action");
                $.ajax({
                    type: "POST",
                    url: submitUrl,
                    data: postData,
                    dataType: 'JSON',
                    success: function (x) {
                        if (x.code === '00') {
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: x.data});
                            } else {
                                location.href = x.data;
                            }
                            return false;
                        } else {
                            alert(x.Message);
                        }
                    }
                });
                return false;
            });
        </script> -->


</body>

</html>