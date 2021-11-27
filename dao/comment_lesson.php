<?php  
 function getAll_comments($id_lesson){
    $conn=connect();
    $stmt= $conn->prepare("SELECT * FROM comments  join user on comments.id_user=user.id_user
     join lesson on comments.id_lesson=lesson.id_lesson WHERE comments.id_lesson=$id_lesson order by id_comment  desc");
    $stmt->execute();
  $rows=array();
   while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
       $rows[]=$row;
   }
   return $rows;

}   

 function Get_child_comment($data,$parent=0){            
echo  "<ul style='margin-left:15px'>"; 
foreach($data as $key=>$val){
    if($val['child']==$parent){
echo '<li>
<div class="container-tab-cmt-ask">
<div class="container-tab-cmt-ask-img">
    <img src="" alt="">
</div>
<div class="container-tab-cmt-ask-text">
    <span class="text-dark"> '.$val['content'].' </span>
    <div class="child_comment">
        <a class="text-danger chats" style="margin-right: 10px; cursor:pointer;">trả lời </a> <span class=>'.$val['time'].'</span>
        <form action="" method="post" class="formTwo">
            <input type="hidden" name="id_user" value="<?= $id_user ?>">
            <input type="hidden" name="id_lesson" value="'.$_GET['lesson'].'">
            <div class="container-tab-cmt-ask-text">
                <input name="content" type="text" placeholder="Trả lời">
            </div>
            <button type="submit" name="comment" class="chat btn btn-primary">Trả Lời</button>
        </form>
    </div>
</div>
</div>
';
$id=$val['id_comment'];
Get_child_comment($data,$id);
    }
}
echo "<li>";
echo  "</ul>";
}   

function insert_comments($id_user,$id_lesson,$content,$child, $time){
$conn=connect();
$stmt=$conn->prepare("INSERT INTO comments(id_user ,id_lesson ,content,child,time)
 VALUES(:id_user,:id_lesson,:content,:child,:time)");
$stmt->execute([":id_user"=>$id_user,":id_lesson"=>$id_lesson,":content"=>$content ,":child"=>$child,":time"=>$time]);
return true;
}

function select_comment()
{

   $conn = connect();
   $sql = "SELECT  comments.id_comment  as IDcomment , lesson.id_lesson  as IDlesson , count(comments.id_comment) as sumBL ,
   min(comments.time) as minDate, max(comments.time) as maxDate
   FROM lesson   inner join comments on comments.id_lesson  =  lesson.id_lesson  group by  lesson.id_lesson";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $row = array();
   while (true) {
      $row = $stmt->fetch();
      if ($row == false) {
         break;
      }
      $rows[] = $row;
   }
   return  $rows;
}

function detail_comment_id($id)
{
   $conn = connect();
   $sql = "SELECT * FROM  comments as cm inner join lesson as pr on
    cm.id_lesson =  pr.id_lesson join user on cm.id_user=user.id_user where pr.id_lesson=:id ";
   $stmt = $conn->prepare($sql);
   $stmt->execute([":id" => $id]);
   $row = array();
   if ($stmt->rowCount()) {
      while (true) {
         $row = $stmt->fetch();
         if ($row == false) {
            break;
         }
         $rows[] = $row;
      }
      return  $rows;
   }
}


?>