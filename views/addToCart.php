<?php
session_start();

require_once '../DAO/DAOCart.php';
require_once '../models/Cart.php';

$image = filter_input(INPUT_POST, 'image');
$title = filter_input(INPUT_POST, 'title');
$price = filter_input(INPUT_POST, 'price');
$quantity = 1;
$total = $price * $quantity;
$userId = $_SESSION['id'];

$cart = new Cart();
$dao = new DAOCart();

$cart->setImage($image);
$cart->setName($title);
$cart->setPrice($price);
$cart->setQuantity($quantity);
$cart->setTotal($total);
$cart->setUserId($userId);

$return = [];
if($title && $price && $quantity && $image && $total && $userId) {
    if($dao->insertCart($cart)) {
        $return = ['status' => 'ok'];
    } else {
        // echo 'Erro ao inserir no banco!';
    }

} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);