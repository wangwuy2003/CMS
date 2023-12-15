<?php
    include APP_ROOT. '/app/services/CategoryService.php';

    class HomeController{
        public function index(){
            //goi du lieu tu category service
            $categoryService = new CategoryService();
            $categories = $categoryService->getAllCategory();

            //goi view
            include APP_ROOT . '/app/view/home/index.php';
        }
    }