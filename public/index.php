<?php
    include '../app/config/config.php';
    include APP_ROOT.'/app/config/DBConnect.php';

//    require_once  APP_ROOT.'/app/controllers/HomeController.php';
//
//    $homeController = new HomeController();
//    $homeController->index();

    $controller = isset($_GET['c']) ? $_GET['c'] : 'home';
    $action = isset($_GET['a']) ? $_GET['a'] : 'index';

//    echo $controller . '--' . $action;
    $controller = ucfirst($controller); //chuyen ki tu dau sang chu hoa: home -> Home
    $controller .= "Controller"; //Home > HomeController

    $path = "controllers/".$controller.".php";//HomeController > controllers/HomeController.php

//    if(file_exists($path)){
        require_once APP_ROOT . './app/' . $path;
        $myController = new $controller();
        $myController->$action();
//    } else {
//        echo "Controller not found.";
//    }






