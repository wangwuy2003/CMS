<?php
    global $conn;
    include APP_ROOT . '/app/models/User.php';
    include APP_ROOT . '/app/config/DBConnect.php';

    class UserService{
        public function getAllUsers(){
            //truy van
            global $conn;
            $sql = "select id, firstname, lastname, email from cms_user order by id desc";
            $stmt = $conn->query($sql);

            //lay du lieu
            $users = [];
            while ($row = $stmt->fetch()){
                $user = new User($row);
                $users[] = $user;
            }
            return $users;
        }

        public function store($params){
            global $conn;
            $user = new User($params);
            $sql = "insert into cms_user(firstname, lastname, email, password) values('" . $user->getFirstname() . "', '" . $user->getLastname() ."', '" . $user->getEmail() . "', '" . $user->getPassword() ."')";
            $stmt = $conn->query($sql);
        }

        public function find($params){
            global $conn;
            $sql = "select id, firstname, lastname, email, password from cms_user where id = '$params'";
            $stmt = $conn->query($sql);
            $each = $stmt->fetch();
            return new User($each);
        }
    }