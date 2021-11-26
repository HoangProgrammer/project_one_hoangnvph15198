
<div class="pcoded-main-container banner_silde">
        <div class="pcoded-wrapper ">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    
                
                      <div class="swiper">
 
  <div class="swiper-wrapper">
 <?php $banner=Get_Banner(); 
 foreach($banner as $value):
 ?>
    <div class="swiper-slide">
      <img class="image_banner" src="image/<?=$value['image']?>" alt="">
    </div>

    <?php
 endforeach
 ?>
  </div>

  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-scrollbar"></div>
</div>








                </div>            
            </div>
        </div>
    </div>

