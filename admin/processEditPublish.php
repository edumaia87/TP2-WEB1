<?php
require_once('../DAO/DAOPublish.php');
require_once('../models/Publish.php');

$id = filter_input(INPUT_POST, 'id');
$publisherId = filter_input(INPUT_POST, 'publisherId');
$bookId = filter_input(INPUT_POST, 'bookId');

$return = [];

if($publisherId && $bookId) {
    $publish = new Publish($id, $publisherId, $bookId);
    $daoPublish = new DaoPublish();
    if($daoPublish->updatePublish($publish)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);