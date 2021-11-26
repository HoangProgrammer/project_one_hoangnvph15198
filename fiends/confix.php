<?php
session_start();
$user = "root";
$password = "";
$dbname = "friends";

$con = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);


$query = $con->prepare("SELECT * FROM user where  id_user <> '1'");
$query->execute();
$row = $query->fetchAll();

// if(isset($_POST['request'])){
//     echo "<pre>";
// var_dump($_POST) ;
// echo  "</pre>";
// }


$my_id2 = 2;

$friends = $con->prepare("SELECT * FROM friend where  user_one=:my_id or user_two=:my_id");
$friends->execute([":my_id" => $my_id2]);
$row_friends = $friends->fetchAll(PDO::FETCH_ASSOC);
   echo "<h1>ban be cua toi </h1>";
foreach ($row_friends as $value) {

    if ($value['user_one'] == $my_id2) {
        $get_fiend = $con->prepare("SELECT id_user,name_user FROM  user  where  id_user=?");
        $get_fiend->execute([$value['user_two']]);
        $row_get_fiend = $get_fiend->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $get_fiend = $con->prepare("SELECT id_user,name_user FROM  user  where  id_user=?");
        $get_fiend->execute([$value['user_one']]);
        $row_get_fiend = $get_fiend->fetchAll(PDO::FETCH_ASSOC);
    }

    foreach ($row_get_fiend as $value) {
        extract($value);

     
        echo "<table>";
        echo  "<tr>";
        
     
        echo " <td>" . $name_user . " </td>";
        echo  "  <td><a >xóa</a></td>"; 
           echo  "</tr>";
        echo  "</table>";
    }
}

$my_id = 2;
$notification = $con->prepare("SELECT id_request ,sender ,
 name_user FROM request_friend join user on request_friend.sender=user.id_user 
where receiver=?");
$notification->execute([$my_id]);
$rows = $notification->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <h1>
            thông báo
        </h1>
        <table  cellspacing="10" cellpadding="10">
            <?php foreach ($rows as $value) : extract($value) ?>
            <tr>            
                   <td><?= $sender ?></td>
                <td><?= $name_user ?></td>
                
                <td><a href="accept.php?id=<?= $sender ?>">chấp nhận</a> /<a href="fiend_request.php?delete_id=<?=$id_request?>">bỏ</a></td>

            </tr>
             
            <?php endforeach; ?>
        </table>
  



    <table>
        <tr>
            <td>ten</td>
            <td>kết bạn</td>

        </tr>

        <?php foreach ($row as $val) : extract($val); ?>
    
                  <tr>               
                <td><?= $name_user ?></td>

                <td><input type="text" name="nhan" value="<?= $id_user ?>"></td>
                    <td> 
                       <form action="fiend_request.php">        

                           <button class="btn_friend" value="<?= $id_user ?>">kết bạn</button>
                    <a class="make_friend" href="fiend_request.php?id=<?= $id_user ?>" >kết bạn</a> 
               </form>
                </td> 
         
           </tr> 
       
        <?php endforeach; ?>

    </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(".btn_friend").on
    </script>
</body>

</html>