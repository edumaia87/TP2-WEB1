<?php
require_once('../DAO/DAOPublisher.php');
require_once('../models/Publisher.php');

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$cellphone = filter_input(INPUT_POST, 'cellphone');
$cnpj = filter_input(INPUT_POST, 'cnpj');


$return = [];

if($id && $name && $email && $cellphone && $cnpj) {
    $publisher = new Publisher($id, $name, $email, $cellphone, $cnpj);
    $daoPublisher = new DaoPublisher();
    if($daoPublisher->updatePublisher($publisher)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);