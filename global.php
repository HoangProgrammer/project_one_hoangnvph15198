<?php
define('URL_IMG','image/');
define('URL_SITE','site/');
define('URL_ASSETS','assets/');


function exit_param($file){
    return array_key_exists($file,$_REQUEST);
}
?>