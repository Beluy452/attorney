<?php
session_start();
    $go_back = $_SERVER['HTTP_REFERER'];

    $lang = $_GET['lang'];

    $_SESSION['lang'] = $lang;

header("location: $go_back");