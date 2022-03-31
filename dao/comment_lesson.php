                            <?php  
                            // function getAll_comments($id_lesson){
                            //     $conn=connect();
                            //     $stmt= $conn->prepare("SELECT comments.id_comment as id_comment,comments.content as content,comments.child as child, 
                            //     user.id_user as id_user,user.ten_user as ten_user,user.image as image,
                            //     comments.time ,comments.id_lesson as id_lesson FROM comments  join user on comments.id_user=user.id_user
                            //     join lesson on comments.id_lesson=lesson.id_lesson WHERE comments.id_lesson=? order by comments.id_comment desc");
                            //     $stmt->execute([$id_lesson]);
                            // $rows=array();
                            // while($row=$stmt->fetch(\PDO::FETCH_ASSOC)){
                            //     $rows[]=$row;
                            // }
                            // return $rows;

                            // }   



                            // function  update_comments($content, $time,$id_comment){
                            // $conn= connect();
                            // $update= $conn->prepare("UPDATE comments set content=? , time=?  WHERE id_comment=? ");
                            // $update->execute([$content, $time,$id_comment]);
                            // return true;
                            // }

                            // function getAll_comment_lesson($id_lesson){
                            //     $conn=connect();
                            //     $stmt= $conn->prepare("SELECT * FROM comments WHERE id_lesson = :id_lesson order by id_comment desc");
                            //     $stmt->execute(['id_lesson' => $id_lesson]);
                            //     $rows = $stmt -> fetchAll();
                            //     return $rows;    
                            // }

                            // function getAllLesson(){
                            //     $conn=connect();
                            //     $stmt= $conn->prepare("SELECT * FROM comments  ");
                            //     $stmt->execute();
                            //     $rows = $stmt -> fetchAll();
                            //     return $rows;    
                            // }

                            // function delete_comment_lesson($id_comment,$list){
                            //     $conn=connect();
                            //         foreach ($list as $value){
                            //             if($value['child'] ==$id_comment ){
                            //                 delete_comment_child($value['id_comment'],$list);
                            //      $stmt= $conn->prepare("DELETE FROM comments WHERE id_comment=?");
                            //         $stmt->execute([$value['id_comment']]);
                            //         return true;
                            //     }
                            //             }
                            //         }


                            // function delete_comment_one($id_comment){
                            //     $conn=connect();                                                                     
                            //      $stmt= $conn->prepare("DELETE FROM comments WHERE id_comment=?  ");
                            //         $stmt->execute([$id_comment]);
                            //         return true;
                                                             
                            //         }
                            // function delete_comment_by_lesson($id){
                            //     $conn=connect();                                                                     
                            //      $stmt= $conn->prepare("DELETE FROM comments WHERE id_lesson=?  ");
                            //         $stmt->execute([$id]);
                            //         return true;
                                                             
                            //         }
                                
                            // function insert_comments($id_user,$id_lesson,$content,$child, $time){
                            // $conn=connect();
                            // $stmt=$conn->prepare("INSERT INTO comments(id_user ,id_lesson ,content,child,time)
                            // VALUES(:id_user,:id_lesson,:content,:child,:time)");
                            // $stmt->execute([":id_user"=>$id_user,":id_lesson"=>$id_lesson,":content"=>$content ,":child"=>$child,":time"=>$time]);
                            // return true;
                            // }


                            // function select_comment()
                            // {

                            // $conn = connect();
                            // $sql = "SELECT  comments.id_comment  as IDcomment , lesson.id_lesson  as IDlesson , count(comments.id_comment) as sumBL ,
                            // min(comments.time) as minDate, max(comments.time) as maxDate
                            // FROM lesson   inner join comments on comments.id_lesson  =  lesson.id_lesson  group by  lesson.id_lesson";
                            // $stmt = $conn->prepare($sql);
                            // $stmt->execute();
                            // $row = array();
                            // while (true) {
                            //     $row = $stmt->fetch();
                            //     if ($row == false) {
                            //         break;
                            //     }
                            //     $rows[] = $row;
                            //     return  $rows;
                            // }
                           
                            // }

                            // function detail_comment_id($id)
                            // {
                            // $conn = connect();
                            // $sql = "SELECT * FROM  comments as cm inner join lesson as pr on
                            //     cm.id_lesson =  pr.id_lesson join user on cm.id_user=user.id_user where pr.id_lesson=:id ";
                            // $stmt = $conn->prepare($sql);
                            // $stmt->execute([":id" => $id]);
                            // $row = array();
                            // if ($stmt->rowCount()) {
                            //     while (true) {
                            //         $row = $stmt->fetch();
                            //         if ($row == false) {
                            //             break;
                            //         }
                            //         $rows[] = $row;
                            //     }
                            //     return  $rows;
                            // }
                            // }


                            ?>