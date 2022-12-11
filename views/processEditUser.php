<?php
require_once("../models/User.php");
require_once("../DAO/DAOUser.php");

session_start();

$id = $_SESSION['id'];
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$cpf = filter_input(INPUT_POST, 'cpf');
$cellphone = filter_input(INPUT_POST, 'cellphone');

$user = new User($id, $name, $email, $password, $cpf, $cellphone, null);
$daoUser = new DaoUser();

$return = [];
if($id && $name && $email && $password && $cpf && $cellphone) {
    if($daoUser->updateUser($user)){
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);

