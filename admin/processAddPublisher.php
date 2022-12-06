<?php
require_once('../DAO/DAOPublisher.php');
require_once('../models/Publisher.php');

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$cellphone = filter_input(INPUT_POST, 'cellphone');
$cnpj = filter_input(INPUT_POST, 'cnpj');

$daoPublisher = new DaoPublisher();
$publisher = new Publisher(null, $name, $email, $cellphone, $cnpj);

$return = [];

if($name && $email && $cellphone && $cnpj) {
    if($daoPublisher->insertPublisher($publisher)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);