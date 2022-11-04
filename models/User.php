<?php
class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $cpf;
    private $telefone;
    private $street;
    private $district;
    private $number;
    private $city;
    private $state;
    private $userType;

    public function __construct($id, $name, $email, $password, $cpf, $telefone, $street, $district, $number, $city, $state, $userType) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->street = $street;
        $this->district = $district;
        $this->number = $number;
        $this->city = $city;
        $this->state = $state;
        $this->userType = $userType;
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
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getStreet() {
        return $this->street;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function setDistrict($district) {
        $this->district = $district;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getCity() {
        return $this->city;
    }   

    public function setCity($city) {
        $this->city = $city;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    } 

    public function getUserType() {
        return $this->userType;
    }

    public function setUserType($userType) {
        $this->userType = $userType;
    }
}