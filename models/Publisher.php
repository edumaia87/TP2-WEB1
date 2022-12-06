<?php
    class Publisher {
        private $id;
        private $name;
        private $email;
        private $cellphone;
        private $cnpj;

        public function __construct($id, $name, $email, $cellphone, $cnpj) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->cellphone = $cellphone;
            $this->cnpj = $cnpj;
        }
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getCellphone() {
            return $this->cellphone;
        }

        public function setCellphone($cellphone) {
            $this->cellphone = $cellphone;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }
    }