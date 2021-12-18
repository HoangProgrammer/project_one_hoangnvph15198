<div id="main">
	<div class="head">
        <h2>Cập nhật lộ trình</h2>
        <div class="col-12">
            </div>
        </div>
        <form action="index.php?action=update_route" method="POST" enctype="multipart/form-data" > 
        <div class="mb-3">
            <input type="hidden" class="form-control input_form" name="id_route" value="<?php echo $data_route_update['id_route'] ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên lộ trình</label>
            <input type="text" class="form-control input_form" name="route" value="<?php echo $data_route_update['route'] ?>">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control input_form" type="file" id="formFile" name="new_img">
            <input type="hidden" class="form-control input_form" name="old_img" value="<?php echo $data_route_update['img'] ?>">
            <img style="width:100px" src="../image/<?php echo $data_route_update['img'] ?>" alt="">
        </div>

        <button class="btn btn-primary" name="submit">Cập nhật</button>
        </form> 
</div>

<script>
        var inputs = document.querySelectorAll(".input_form");
        var acb = document.getElementById('acb');
        var btn =  document.querySelector(".btn");
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].onblur = function(e){
                var value = inputs[i].value;
                console.log(value)
                if (value != "") {
                    inputs[i].style.border = "1px solid green";
                }
                else{
                    inputs[i].style.border = "1px solid red";
                    btn.setAttribute('disabled', 'disabled');
                }
            }            
        }
    </script>




