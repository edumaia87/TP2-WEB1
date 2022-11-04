<?php

require_once('../DAO/DAOUser.php');
$daoUser = new DaoUser();

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$user = [];
if(isset($_POST['email']) || isset($_POST['password'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email corretamente!";
    } else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha corretamente!";
    } else {
        if($daoUser->loginUser($email, $password)) {
            $user = $daoUser->loginUser($email, $password);
        } else {
            echo "Deu ruim.";
        }


        if(!isset($_SESSION)) {
            session_start();
        }

        $data = $user[0];

        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];

        header('location: home.php');
    }
}