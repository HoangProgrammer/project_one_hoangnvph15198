<?php  require_once("../../models/pdo.php");?>
<?php  require_once("../../dao/RatingDB.php");?>
<?php  require_once("../../global.php");?>

<?php  
if($_POST['query'] !=''){
    $conn=connect();
    $search_arr=explode(',',$_POST['query']);
    $search_text="'" . implode("','", $search_arr). "'";
    $Get_Rating=Get_Rating_status( $search_text);
}else{
  $Get_Rating=Get_Rating_one();  
} 
?>
<thead>
            <tr>

        <th class="text-center">tên </th>
        <th class="text-center">nội dung</th>
        <th class="text-center">thời gian</th>
        <th class="text-center">trạng thái</th>
        <th colspan="2" class="text-center">thao tác</th>  
         </tr>
        </thead>

        <tbody>

<?php

foreach($Get_Rating as $values){ extract($values)?>
<tr>
<td><?=$ten_user ?></td>
<td><?=$content ?></td>
<td><?=get_time($time) ?></td>
<td>
      <?=$st= ($st == 1)?"chưa phản hồi":"đã phản hồi"?>
    </td>

    <td>
      <?php
 if($st==2){ ?>
    <a class="delete btn btn-success" href="index.php?action=edit_request&id_rating=<?= $id_rating?>">sửa phản hồi</a> 
    
    
<?php }else{ ?> 
<a class="delete btn btn-success" href="index.php?action=request&id_rating=<?= $id_rating?>"> phản hồi</a> 

    <?php } ?>  
    </td>
<td>
    


<a class="delete btn btn-danger" href="index.php?action=xoa_user&id_rating=<?= $id_rating?>">xóa</a> </td>
</tr>

<?php } ?>
        </tbody>
       