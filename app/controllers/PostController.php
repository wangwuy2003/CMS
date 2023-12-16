<?php
    include APP_ROOT . '/app/services/PostService.php';
    include APP_ROOT . '/app/services/CategoryService.php';
    class PostController{
        public function index(){
            //goi du lieu tu post service
            $posts = (new PostService())->getAllPost();

            //goi view
            include APP_ROOT . '/app/view/post/index.php';


        }

        public function create(){
            $categories = (new CategoryService())->getAllCategory();
            include APP_ROOT . '/app/view/post/create.php';
        }
    }