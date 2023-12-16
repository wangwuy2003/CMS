<?php
    class Post{
        private $id;
        private $title;
        private $message;
        private $category_id;
        private $userid;
        private $status;
        private $created;
        private $updated;

        public function __construct($row){
            $this->id = $row['id'] ?? '';
            $this->title = $row['title'];
            $this->message = $row['message'];
            $this->category_id = $row['category_id'];
            $this->userid = $row['userid'];
            $this->status = $row['status'];
            $this->created = $row['created'] ?? '';
            $this->updated = $row['updated'] ?? '';
        }

        /**
         * @return mixed|string
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param  mixed|string  $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param  mixed  $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getMessage()
        {
            return $this->message;
        }

        /**
         * @param  mixed  $message
         */
        public function setMessage($message)
        {
            $this->message = $message;
        }

        /**
         * @return mixed
         */
        public function getCategoryId()
        {
            return $this->category_id;
        }

        /**
         * @param  mixed  $category_id
         */
        public function setCategoryId($category_id)
        {
            $this->category_id = $category_id;
        }

        /**
         * @return mixed
         */
        public function getUserid()
        {
            return $this->userid;
        }

        /**
         * @param  mixed  $userid
         */
        public function setUserid($userid)
        {
            $this->userid = $userid;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->status;
        }

        /**
         * @param  mixed  $status
         */
        public function setStatus($status)
        {
            $this->status = $status;
        }

        /**
         * @return mixed|string
         */
        public function getCreated()
        {
            return $this->created;
        }

        /**
         * @param  mixed|string  $created
         */
        public function setCreated($created)
        {
            $this->created = $created;
        }

        /**
         * @return mixed|string
         */
        public function getUpdated()
        {
            return $this->updated;
        }

        /**
         * @param  mixed|string  $updated
         */
        public function setUpdated($updated)
        {
            $this->updated = $updated;
        }



    }