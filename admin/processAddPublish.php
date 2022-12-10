<?php
require_once('../DAO/DAOPublish.php');
require_once('../models/Publish.php');

$publisherId = filter_input(INPUT_POST, 'publisherId');
$bookId = filter_input(INPUT_POST, 'bookId');

$daoPublish = new DaoPublish();
$publish = new Publish($publisherId, $bookId);

$return = [];

if($publisherId && $bookId) {
    if($daoPublish->insertPublish($publish)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);