<?php 
require_once "./../../models/pdo.php";
require_once "./../../dao/quizDB.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicon icon -->
    <link rel="icon" href="./../../assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./../../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="./../../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <link rel="stylesheet" href="cours.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body cz-shortcut-listen="true">
    
    <div class="page-exercise">
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Trang chủ</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cộng đồng</a>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mạnh Quân</a>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li> -->
                      
                    </ul>
                    <div class="d-flex">
                        <img class="header-exercise-user" src="../assets/images/user/avatar-2.jpg" alt="">
                    </div>
                    <!-- <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                  </div>
                </div>
              </nav>
            
        
        <div class="container-exercise">
            <header class="header-exercise">
                <img class="header-exercise-logo" src="../assets/images/logo-thumb.png" alt="">
            <div class="header-exercise-title">
                <span>Final test </span>
            </div>
            <img class="header-exercise-user" src="../assets/images/user/avatar-2.jpg" alt="">
            </header>
            <form action="" class="container-exercise-page">
                <div class="container-exercise-title">
                   
                    <p>Trắc nghiệm cuối bài</p>
                    <span>0 points (graded)</span>
                </div>
                <?php 
                $count=0;
              
                if(isset($_GET['id_learn'])){
                    $id_learn = $_GET['id_learn'];}
                  $quiz= getAll_quiz($id_learn);
                  foreach($quiz as $val): extract($val); ?>

                <div class="container-exercise-question">
                    <div class="container-exercise-question-name">
                        <span>Câu <?=$count+=1?>:</span>
                    </div>
                    <div class="container-exercise-question-problem">
                        <span><?=$question ?></span>
                    </div>
                    <label class="container-exercise-question-answer">
                        <input name="<?=$id_quiz ?>" type="radio">
                        <span><?=$Selection1?></span>
                    </label>
                    <label class="container-exercise-question-answer">
                        <input name="<?=$id_quiz ?>" type="radio">
                        <span><?=$Selection2?></span>
                    </label>
                    <label class="container-exercise-question-answer">
                        <input name="<?=$id_quiz ?>" type="radio">
                        <span><?=$Selection3?></span>
                    </label>
                
                </div>
            <?php endforeach; ?>
                <button  class="btn btn-primary">Nộp bài</button>
            </form>
        </div>
    </div>
</body>
</html>