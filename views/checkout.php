<?php

session_start();

require_once ('../DAO/DAOBuys.php');
require_once ('../models/Buys.php');

$bookId = filter_input(INPUT_POST, 'bookId');
$userId = $_SESSION['id'];
$price = filter_input(INPUT_POST, 'price');
$saleDate = filter_input(INPUT_POST, 'saleDate');

$daoBuys = new DAOBuys();
$buys = new Buys(null, $bookId, $userId, $price, $saleDate);

$return = [];

if($bookId && $userId && $price && $saleDate) {
    if($daoBuys->insertBuy($buys)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'erro'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);