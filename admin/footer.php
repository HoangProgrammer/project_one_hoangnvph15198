<?php 
$thong_ke=GetData_Thong_ke() ;

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
  load_data()
 function load_data(query=''){

   $.ajax({
     url:"./rating/fileAjax.php",
     method:"POST",
     data:{query:query},
     success:function(data) {
$('#table_rating').html(data);
     }
   })
 } 
 $('#select').change(function() {
   $('#hidden_status').val($('#select').val())
   var query=$('#hidden_status').val()
   load_data(query);
 })

})


$(document).ready(function() {

// $('#create').on('click',function(e){

// $('#course_modal').modal('show');

//   })

// $('#closes').on('click', function(){
//     $('#course_modal').modal('hide');
//   })

  $('.form-radio1').click(function(e){
    $('#price').hide()
  })

  $('.form-radio2').click(function(e){
    $('#price').show()
  })

})


</script>





<?php


if (isset($success)) { ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: '<?php echo  $success ?>',
      showConfirmButton: false,
      timer: 1500,
    })
  </script>

<?php   }  ?>


<script type="text/javascript">

  var select_chose = document.querySelectorAll('.select_chose')
  var chose_All = document.querySelector('#chose_all')
  var select = document.querySelector('.btn-select')
  var unselect = document.querySelector('.btn-unselect')

  chose_All.onclick = function() {
    select_chose.forEach(function(element) {
  
      if (chose_All.checked==true) {
        element.checked = true;
        select.style.display = "none";
        unselect.style.display = "block";

      } else {
        element.checked = false;
        select.style.display = "block";
        unselect.style.display = "none";
      }
    })
  }
</script>



<script type="text/javascript">
  $('.delete').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'b???n c?? ch???c mu???n x??a kh??ng ?',
      // text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '?????ng ??'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
        Swal.fire(
          'success!',
          'Your file has been deleted.',
          'success'

        )
      }
    })

  })


  
  $(document).ready(
    ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
      }

    ));






  $(".menu").click(function() {
    $("#mySidenav").css('width', '70px');
    $("#main").css('margin-left', '70px');
    $(".logo").css('display', 'none');
    $(".logo1").css('display', 'block');
    $(".logo span").css('visibility', 'visible');
    $(".logo span").css('margin-left', '-10px');
    $(".icon-a").css('visibility', 'hidden');
    $(".icon-a").css('height', '40px');
    $(".icons").css('visibility', 'visible');
    $(".icons").css('margin-left', '-8px');
    $(".menu1").css('display', 'block');
    $(".menu").css('display', 'none');
  });

  $(".menu1").click(function() {
    $("#mySidenav").css('width', '250px');
    $("#main").css('margin-left', '250px');
    $(".logo").css('visibility', 'visible');
    $(".logo").css('display', 'block');
    $(".icon-a").css('visibility', 'visible');
    $(".icons").css('visibility', 'visible');
    $(".menu").css('display', 'block');
    $(".menu1").css('display', 'none');
  });
</script>
<script>
  $(document).ready(function() {
    $(".profile p").click(function() {
      $(".profile-div").toggle();

    });
    $(".noti-icon").click(function() {
      $(".notification-div").toggle();
    });
  });
</script>

<script type="text/javascript">
  // Load google charts
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Danh m???c', 's??? l?????t xem'],
      <?php
      $sumCategory = count($thong_ke);
      $i = 1;
      foreach ($thong_ke as $val) {
        if ($i == $sumCategory){
         $Phay = " "; 
        }else{
        $Phay = ",";  
        } 
     
        echo "['".$val['NameCourse']."',".$val['lesson']."]". $Phay;
        $i+=1;
      }
      ?>

    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
      'title': 'Bi???u ????? Th???ng K?? Kh??a H???c',
      'width': 1150,
      'height': 800
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
</body>


</html>