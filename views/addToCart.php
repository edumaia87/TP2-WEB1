<?php

require_once '../DAO/DAOCart.php';
require_once '../models/Cart.php';

$image = filter_input(INPUT_POST, 'image');
$title = filter_input(INPUT_POST, 'title');
$price = filter_input(INPUT_POST, 'price');

$cart = new Cart();
$dao = new DAOCart();

$retorno = [];
if($image && $title && $price) {
    if($dao->insertCart($cart)) {
        $retorno = ['status' => 'ok'];
    } else {

    }

} else {
    $retorno = ['status' => 'erro'];
}

echo json_encode($retorno);