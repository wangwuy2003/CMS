<?php

    include APP_ROOT . '/app/services/CategoryService.php';
    class CategoryController{
        public function index(){
            //goi du lieu tu category service
            $categoryService = new CategoryService();
            $categories = $categoryService->getAllCategory();

            //goi view
            include APP_ROOT . '/app/view/category/index.php';
        }

        public function create(){
            include APP_ROOT . '/app/view/category/create.php';
        }

        public function store(){
            $categoryService = new CategoryService();
            $category = $categoryService->store($_POST);
            $this->index();
        }

        public function edit(){
            $id = $_GET['id'];
            $each = (new CategoryService())->find($id);
            include APP_ROOT . '/app/view/category/edit.php';

        }

        public function update(){
            //goi service lay ham update
            (new CategoryService())->update($_POST);
            $categories = (new CategoryService())->getAllCategory();
            include APP_ROOT . '/app/view/category/index.php';
        }

        public function delete(){
            $id = $_GET['id'];
            (new CategoryService())->delete($id);
            $this->index();
        }

    }