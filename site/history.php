<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <h1>Lịch sử học </h1>
            <div class="container_social">

                <h4>các bài đã học hôm nay </h4>
                <?php $get_history = get_history($id_user);
// var_dump($days);
                foreach ($get_history as $key => $value) : extract($value);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
           $times=date('Y-m-d H:i:s');
           var_dump($timeHistory);

            if( strtotime($timeHistory)  < strtotime( $times)  ){
                echo "bé hơn thật";
            }else{
                echo "lớn hơn";
            }
            //  var_dump($times);die();
               ?>    

                    <div class="wrap_social">
                        <div class="user_info">
                            <input type="checkbox">
                            <h5 style="margin:10px"> <a href=""><?= $lessonName ?></a></h5> <span><?=  get_time($timeHistory); ?></span>
                        </div>
                        <form action="" method="post">
                            <button type='submit' id="send_request" class='btn_request btn btn-primary'>xóa</button>
                        </form>
                    </div>

            
                  
                <?php endforeach; ?>


            </div>


        </div>
    </div>
</div>
      

               