<?php
require_once('../DAO/DAOBuys.php');
require_once('../models/Buys.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoBuys = new DaoBuys();
    $buys = new Buys($id, null, null, null, null);

    if($daoBuys->deleteBuy($buys)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }  
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);