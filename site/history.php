<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <h1>Lịch sử học </h1>
            <div class="container_social">

                <h4>các bài đã học gần đây </h4>
                <?php $get_history = get_history($id_user);
                foreach ($get_history as $key => $value) :         
            //   $date=  date_create($value['timeHistory'])
            //  var_dump($times);die();  
                       $get_point=  getAll_point_user($id_user ,$value['id_lesson']);  
                             
               ?>    
                    <div class="wrap_social">
                        <div class="user_info">
                            <input type="checkbox">
                            <h5 style="margin:10px"> <a href=""><?= $value['lessonName'] ?></a></h5> <span><?=get_time($value['timeHistory']); ?> </span>

                       <?php   
                        foreach($get_point as $va): 
                       if($va['point_total']==10){ ?>
                         <p class='text-success'>đã hoàn thành</p>     
                         <a href="" class="btn btn-primary">ôn tập</a>                    
                      <?php  }else{        
                          if($va['point_total']==0){ ?>                                                                                                                                 
                       <p class='text-warning'>chưa hoàn thành</p> 
                       <a href="" class="btn btn-primary">học tiếp</a>
                         <?php } } endforeach; ?> 
                      
                        
                      
                               
                              
                        
                        </div>
                        <form action="" method="post">
                            <button type='submit' id="send_request" class='btn_request btn btn-danger'>xóa</button>
                        </form>
                    </div>

            
                  
                <?php      endforeach; ?>


            </div>


        </div>
    </div>
</div>
      

               