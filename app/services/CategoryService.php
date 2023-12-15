<?php
    global $conn;
    require_once APP_ROOT.'/app/models/Category.php';
    require_once APP_ROOT.'/app/config/DBConnect.php';

    class CategoryService{
        public function getAllCategory(){
            //truy van
            global $conn;
            $sql = "select * from cms_category order by id desc";
            $stmt = $conn->query($sql);

            //lay du lieu
            $categories = [];
            while($row = $stmt->fetch()){
                $category = new Category($row);
                $categories[] = $category;
            }
            return $categories;
        }

        public function store($name){
            global $conn;
            $category = new Category($name);
            $sql = "insert into cms_category(name) values('" . $category->getName() . "')";
            $stmt = $conn->exec($sql);
        }

        public function find($id){
            global $conn;
            $sql = "select * from cms_category where id = '$id'";
            $stmt = $conn->query($sql);
            $each = $stmt->fetch();
            return new Category($each);
        }

        public function update(array $data){
            global $conn;
            $object = new Category($data);
            $sql = "update cms_category set name = '". $object->getName() ."' where id = '". $object->getId(). "'";
            $stmt = $conn->exec($sql);
        }

        public function delete($id){
            global $conn;
            $sql = "delete from cms_category where id = '$id'";
            $stmt = $conn->query($sql);
        }

    }
