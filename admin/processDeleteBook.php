<?php
require_once('../DAO/DAOBook.php');
require_once('../models/Book.php');
require_once('../DAO/DAOBuys.php');
require_once('../models/Buys.php');
require_once('../DAO/DAOPublish.php');
require_once('../models/Publish.php');

$id = filter_input(INPUT_POST, 'id');
$return = [];

if($id) {
    $daoBuys = new DAOBuys();
    $daoBook = new DaoBook();
    $daoPublish = new DaoPublish();

    $buys = new Buys(null, $id, null, null, null);
    $publish = new Publish(null, null, $id);
    $book = new Book($id, null, null, null, null, null, null, null, null);

    if($daoBuys->deleteByBookId($buys) || $daoPublish->deletePubByBookId($publish)) {
        if($daoBook->deleteBook($book)) {
            $return = ['status' => 'ok'];
        } else {
            $return = ['status' => 'sla'];
        }
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);