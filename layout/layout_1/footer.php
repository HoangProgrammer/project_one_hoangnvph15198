    <!-- footer của Hoàng -->


    <footer-main class=" viewport__footer" ng-if="LayoutMain.layout.footer">
        <footer class="footer-main">
            <ul class="footer-main__link-list">
            <li class="footer-main__copyright footer-main__link-item footer-main__link-item--no-spacing">
                <span class="font-face-lt">2021 © Busuu Ltd</span></li><li class="footer-main__link-item">
                    <a class="footer-main__link" href="vi/terms">Điều khoản</a>
                </li>
                    <li class="footer-main__link-item"><a class="footer-main__link" href="vi/privacy">Bảo mật</a>
                </li>
            </ul>
            <div class="footer-main__social"><ul class="footer-main__link-list"><li class="footer-main__link-item">
                <a class="footer-main__link" href="https://help.busuu.com/hc/vi" target="_blank" rel="noreferrer noopener">Trợ giúp</a>
            </li>
        </ul>

</div>


</footer>
</footer-main>

  


<script type="text/javascript">

  $(document).ready(function(){
    const swiper = new Swiper('.swiper', {
autoplay:true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

  })

    </script>

<script type="text/javascript">   

  CKEDITOR.replace( 'editor1' );


         $(document).ready(function(){

       


 $("#rateYo").rateYo({
                fullStar: true,
                onSet: function(rating, rate) {
                    $('#rating').val(rating);
                }
            });


        $('#add_review').click(function() {

            $('#review_modal').modal('show');

        });

        $('#closes').click(function() {

            $('#review_modal').modal("hide");

        });


 

    });
</script>




</body>
</html>
