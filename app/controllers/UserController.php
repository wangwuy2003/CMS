<?php

    include APP_ROOT . '/app/services/UserService.php';
    class UserController{
        public function index(){
            //goi du lieu tu user service
            $userService = new UserService();
            $users = $userService->getAllUsers();

            //goi view hien thi
            include APP_ROOT . '/app/view/user/index.php';
        }

        public function create(){
            include APP_ROOT . '/app/view/user/create.php';
        }

        public function store(){
            $userService = new UserService();
            $user = $userService->store($_POST);
            $this->index();
        }

        public function edit(){
            $id = $_GET['id'];
            $each = (new UserService())->find($id);
            include APP_ROOT . '/app/view/user/edit.php';
        }

        public function update(){
            (new UserService())->update($_POST);
            $this->index();
        }

        public function delete() {
            $id = $_GET['id'];
            (new UserService())->delete($id);
            $this->index();
        }
    }