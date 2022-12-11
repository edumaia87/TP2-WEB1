<?php
require_once('../DAO/DAOUser.php');
require_once('../models/User.php');
require_once('../DAO/DAOAddress.php');
require_once('../models/Address.php');
require_once('../DAO/DAOBuys.php');
require_once('../models/Buys.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoUser = new DaoUser();
    $user = new User($id, null, null, null, null, null, null);
    $daoAddress = new DaoAddress();
    $address = new Address(null, $id, null, null, null, null, null);
    $daoBuys = new DaoBuys();
    $buys = new Buys(null, null, $id, null, null);

    if($daoAddress->deleteAddressByUserId($address) || $daoBuys->deleteByUserId($buys)) {
        if($daoUser->deleteUser($user)) {
            $return = ['status' => 'ok'];
        } else {
            $return = ['status' => 'sla'];
        }  
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);