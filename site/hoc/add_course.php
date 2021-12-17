<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Khóa học</th>
            <th scope="col">Giá tiền</th>
            <th scope="col">Ngày mua</th>
            <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            // var_dump($rows);
            if(isset($_COOKIE['cart'])){
                $cookie=stripslashes($_COOKIE['cart']);
                $cart=json_decode($cookie,true);
            }else{
                $cart=[]; 
            }
// var_dump($cart);
            $i = 0;
                foreach ($cart as $key => $value) { 
                    if($value['id_user']==$id_user){                
                    ?>  
                                     
            <tr>
            <th scope="row"> <?php echo $i+=1 ?></th>
            <td><?= $value['id_item'] ?></td>
            <td><?= $value['name_course'] ?></td>
            <td><?= $value['money'] ?></td>
            <td><?=$value['time']?></td>
            <!-- <td><?php echo $value['trang_thai'] ?></td> -->
            </tr>
            <?php  } }?>
            
        </tbody>
        </table>
</div>
</div>