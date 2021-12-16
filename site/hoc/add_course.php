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
            $cart=isset($_COOKIE['cart']) ? $_COOKIE['cart'] :"[]";
            $cart=json_decode($cart);
// var_dump($cart);
            $i = 0;
                foreach ($cart as $value) { 
                    if($value->id_user==$id_user){                
                    ?>  
                                     
            <tr>
            <th scope="row"> <?php echo $i+=1 ?></th>
            <td><?= $value->id_user ?></td>
            <td><?= $value->name_course ?></td>
            <td><?= $value->money ?></td>
            <td><?= $value->time?></td>
            <!-- <td><?php echo $value['trang_thai'] ?></td> -->
            </tr>
            <?php  } }?>
            
        </tbody>
        </table>
</div>
</div>