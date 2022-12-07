<?php

require_once('../DAO/DAOUser.php');

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$user = [];

$daoUser = new DaoUser();
$return = [];
if($email && $password) {
    $user = $daoUser->loginUser($email, $password);

    if(strlen($email) == 0) {
        $return = ['status' => 'erro', 'message' => 'Preencha seu e-mail corretamente!'];
    } else if(strlen($password) == 0) {
        $return = ['status' => 'erro', 'message' => 'Preencha sua senha corretamente!'];
    } else {
        if($user != '') {
            if(!isset($_SESSION)) {
                session_start();
            }

            $data = $user[0];

            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];

            if($data['user_type'] == 'admin') {
                $return = ['status' => 'ok', 'type' => 'admin'];
            } else {
                $return = ['status' => 'ok', 'type' => 'user'];
            }
            // header('location: home.php');
        } else {
            $return = ['status' => 'erro', 'message' => 'Erro: Usuário ou senha inválidos!'];
        }
    }
} else {
    $return = ['status' => 'aviso', 'message' => 'Erro: Campos ausentes!'];
    // header('location: login.php');
}

echo json_encode($return);