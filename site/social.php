<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/social.css">
</head>
<body>
    <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <h1>Cộng đồng/Xã hội</h1>
                    <div class="container_social">
                        <h4>Gợi ý kết bạn</h4>

                        <?php $user=Get_account(); 
                        foreach($user as $val): extract($val);
                        ?>
                        <div class="wrap_social">
                            <div class="user_info">
                                <img src="./image/<?=$image?>" alt="">
                                <p><?=$ten_user?></p>
                            </div>
                            <div class="btn btn-primary">
                                <a href="<?=$id_user?>">kết bạn</a>
                            </div>
                        </div>
<?php endforeach; ?>
                         
                    </div>
                </div>
            </div> 
    </div>
</body>
</html>