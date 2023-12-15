<?php
    class Category{
        private $id;
        private $name;

        public function __construct($row)
        {
            $this->id = isset($row['id']) ? $row['id'] : '';
            $this->name = $row['name'];
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param  mixed  $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param  mixed  $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
    }