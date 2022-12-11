<?php
session_start();

require_once ('../models/Address.php');
require_once ('../DAO/DAOAddress.php');

$id = filter_input(INPUT_POST, 'id');
$street = filter_input(INPUT_POST, 'street');
$district = filter_input(INPUT_POST, 'district');
$number = filter_input(INPUT_POST, 'number');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');
$userId = $_SESSION['id'];

$address = new Address($id, $userId, $street, $district, $number, $city, $state);
$daoAddress = new DaoAddress();

$return = [];
if($userId && $street && $district && $number && $city && $state) {
    if($daoAddress->updateAddress($address)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'erro'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);

