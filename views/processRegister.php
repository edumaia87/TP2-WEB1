<?php

require_once("../models/User.php");
require_once("../DAO/DAOUser.php");

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$cpf = filter_input(INPUT_POST, 'cpf');
$cellphone = filter_input(INPUT_POST, 'cellphone');
$userType = 'user';

$user = new User(null, $name, $email, $password, $cpf, $cellphone, $userType);
$daoUser = new DaoUser();

$return = [];
if($name && $email && $password && $cpf && $cellphone) {
    if($daoUser->insertUser($user)){
        $return = ['status' => 'ok'];
    } else {
        echo "Não foi possível realizar o cadastro.";
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);

