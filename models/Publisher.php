<?php
    class Publisher {
        private $id;
        private $name;
        private $email;
        private $telefone;

        public function __construct($id, $name, $email, $telefone) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->telefone = $telefone;
        }
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }
    }