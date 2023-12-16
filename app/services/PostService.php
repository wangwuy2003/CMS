<?php
    global $conn;
    include APP_ROOT . '/app/models/Post.php';
    include APP_ROOT . '/app/models/User.php';
    include APP_ROOT . '/app/config/DBConnect.php';
    class PostService{
        public function getAllPost(): array
        {
            global $conn;
            $sql = "select * from cms_posts";
            $stmt = $conn->query($sql);

            $posts = [];
            foreach($stmt->fetchAll() as $row)
            {
                $post = new Post($row);
                $posts[] = $post;
            }

            return $posts;
        }
    }
