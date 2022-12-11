<?php
require_once('../DAO/DAOPublish.php');
require_once('../models/Publish.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoPublish = new DaoPublish();
    $publish = new Publish($id, null, null);

    if($daoPublish->deletePublish($publish)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);