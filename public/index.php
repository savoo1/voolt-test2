<?php
    include_once './inc/functions.php';

    //If failed to include then redirect to 404 page
    if(!file_exists('./'.get_clean_path().'.php')){
        include_once './404.php';
        exit;
    }

    include_once './'.get_clean_path().'.php';
    exit;
?>


