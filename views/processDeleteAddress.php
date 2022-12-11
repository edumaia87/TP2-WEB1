<?php
require_once('../DAO/DAOAddress.php');
require_once('../models/Address.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoAddress = new DaoAddress();
    $address = new Address($id, null, null, null, null, null, null);

    if($daoAddress->deleteAddress($address)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }  
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);