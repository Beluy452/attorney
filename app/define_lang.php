<?php
session_start();

if(!isset($_SESSION)){die('О ужас! сервер умер!');}

    if($_SESSION['lang']==''){
        include('lang_uk.php');
    }
    if($_SESSION['lang']=='ua'){
        include('lang_uk.php');
    }else if($_SESSION['lang']=='ru'){
        include('lang_ru.php');
    }else if($_SESSION['lang']=='en'){
        include('lang_en.php');
    }