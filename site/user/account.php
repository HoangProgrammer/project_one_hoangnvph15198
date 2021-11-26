<div class="pcoded-main-container">
<div class="main-body">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
        
    <div class="page-wrap page-wrap--medium">
        <div class="panel-main settings__panel">
            <div class="settings__menu">
                <h1 class="settings__heading" data-cy="UserSettings__heading">Cài đặt</h1>
                <div class="tab-menu__tabs" data-cy="MyProfile__menuTabs">
                    <a class="nav__link  nav__link--active " id="account">Tài khoản</a>
                    <a class="nav__link " id="friend">Bạn Bè</a>
                    <!-- <a class="nav__link " data-qa-settings-languages="true">Ngôn ngữ</a>
                   <a class="nav__link " data-qa-settings-personal="true">Cài đặt cá nhân</a>
                    <a class="nav__link " data-qa-settings-subscription="true">Đăng ký</a>
                    <a class="nav__link " data-qa-settings-studyplan="true">Kế hoạch học tập</a></div>               -->
            </div>
            <div class="settings__view-container" id="friends">
             
               <table cellspacing="10" cellpadding="10">
                   <thead>
                    <?php  
               $Select_MyFriend=Select_MyFriend($id_user);
               if(empty($Select_MyFriend)){
                   echo "<h1 class='text-center'>Trống</h1>";
               }else{         
               foreach ($Select_MyFriend as $val){  ?>                 
                       <tr>
                           <th><?= $val['image']=($val['image']=="")?"<i class='fa fa-user'></i>": '<img style="width:50px; border-radius:50%" src="image/'.$val['image'].'" alt="">'  ?></th>
                           <th><?= ucfirst($val['ten_user'])?></th>
                           <th><button class="btn btn-danger">xóa</button></th>
                       </tr>
               <?php }} ?>   
                   </thead>

               </table>
            </div>
            <div class="settings__view-container" id="exchangeAcount">
                        <!-- <h1 class="settings__title">Tài khoản</h1> -->
                        <p class="settings__copy">Thông tin tài khoản</p>
                              <div class="">
                             <div class="avatar-upload__no-crop">
                             <div class="avatar-upload__dropzone"><img src="">bạn chưa có ảnh</div>
                             <label for="file-select" class="btn btn--default btn--s avatar-upload__select-cta-label">Tải ảnh lên
                                 <input type="file" class="avatar-upload__select-cta" id="file-select">
                        </label>
                    </div>
                    <!-- <div class="avatar-upload__crop">
                                <div class="avatar-upload__crop-container" style="display: none;">
                            <img id="avatar-image-tag" src="">
                           
                        </div>
                        </div> -->
                        </div>
                        <form class="settings-account__form"><div class="form-group settings__column">
                            <label class="form__label" for="name">Tên đăng nhập</label>
                            <input class="form__input" name="name" id="name" placeholder="Họ tên" type="text" required="" value="hoang"></div>
                            <div class="form-group settings__column">
                                <label class="form__label" for="email">Email</label>
                                <input class="form__input" name="email" id="email" placeholder="Email" type="email" value="nguyenvanhoang2444@gmail.com">
                            </div>
                          
                    <div class="settings__wrap-container">
                                <div class="settings__row">
                                    <div class="form-group settings__column">
                                    <label class="form__label" for="newPassword">Mật khẩu mới</label>
                                    <input class="form__input" name="newPassword" type="password" id="newPassword" pattern="^.{6,}$" title="Mật khẩu của bạn phải có ít nhất 6 ký tự." value="" aria-autocomplete="list">
                                </div>
                                    <div class="form-group settings__column">
                                        <label class="form__label" for="confirmPassword">Xác nhận mật khẩu</label>
                                        <input class="form__input" name="confirmPassword" type="password" id="confirmPassword" pattern="^.{6,}$" title="Mật khẩu của bạn phải có ít nhất 6 ký tự." value=""></div>
                                    </div>
                                </div><div class="form-group settings__column">
                                    <label for="interfaceLanguage" class="form__label">Ngôn ngữ giao diện</label>
                                    <div class="form__select-wrap">
                                        <select id="interfaceLanguage" class="form__select" name="interfaceLanguage" data-qa-interface-lang="vi">
                                            <option value="ar">اللغة العربية</option><option value="zh">中文</option>
                                            <option value="en">English</option><option value="fr">Français</option><option value="de">Deutsch</option>
                                            <option value="it">Italiano</option><option value="ja">日本語</option>
                                            <option value="pl">Polski</option>
                                            <option value="pt">Português</option><option value="ru">Pусский</option>
                                            <option value="es">Español</option><option value="tr">Türkçe</option><option value="id">Bahasa Indonesia</option>
                                            <option value="ko">한국어</option><option value="vi">Tiếng Việt</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn--s btn--primary settings__cta" type="submit" data-qa-save="true">Lưu</button>
                            </form>
             
                            
                            </div>

                            </div>
                        </div>
    


    

                        
    </div>
        </div>
        </div>
        </div>

   <script>
           $('#friends').hide();
              $('#account').click(function() {
                  $('#friends').hide();
                  $('#exchangeAcount').show();
              })  
              $('#friend').click(function() {
                  $('#friends').show();
                  $('#exchangeAcount').hide();
              })  


              
$('a.nav__link').click(function() {
    $('a.nav__link--active').removeClass('nav__link--active');
    $(this).addClass('nav__link--active')

})

   </script>