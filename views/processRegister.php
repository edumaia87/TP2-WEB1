<?php

require_once("../models/User.php");
require_once("../DAO/DAOUser.php");

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$cpf = filter_input(INPUT_POST, 'cpf');
$cellphone = filter_input(INPUT_POST, 'cellphone');
$street = filter_input(INPUT_POST, 'street');
$district = filter_input(INPUT_POST, 'district');
$number = filter_input(INPUT_POST, 'number');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');

/*echo $name;
echo $email;
echo $password;
echo $cpf;
echo $cellphone;
echo $street;
echo $district;
echo $number;
echo $state;
echo $city;*/

$user = new User(null, $name, $email, $password, $cpf, $cellphone, $street, $district, $number, $city, $state, 'user');
$daoUser = new DaoUser();


if($daoUser->insertUser($user)) echo "Cadastro realizado com sucesso!";
else echo "Não foi possível realizar o cadastro.";

