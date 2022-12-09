<?php
require_once('../DAO/DAOPublisher.php');
require_once('../models/Publisher.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $publisher = new Publisher($id, null, null, null, null);
    $daoPublisher = new DaoPublisher();
    if($daoPublisher->deletePublisher($publisher)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);