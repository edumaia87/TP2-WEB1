<?php
require_once('../DAO/DAOPublisher.php');
require_once('../models/Publisher.php');
require_once('../DAO/DAOPublish.php');
require_once('../models/Publish.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoPublisher = new DaoPublisher();
    $daoPublish = new DaoPublish();

    $publisher = new Publisher($id, null, null, null, null);
    $publish = new Publish($id, null);

    if($daoPublish->deletePubByPubId($publish)) {
        if($daoPublisher->deletePublisher($publisher)) {
            $return = ['status' => 'ok'];
        } else {
            $return = ['status' => 'sla'];
        }
    }   
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);