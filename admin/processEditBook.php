<?php
require_once('../DAO/DAOBook.php');
require_once('../models/Book.php');

$id = filter_input(INPUT_POST, 'id');
$title = filter_input(INPUT_POST, 'title');
$image = filter_input(INPUT_POST, 'image');
$author = filter_input(INPUT_POST, 'author');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price');
$publishedDate = filter_input(INPUT_POST, 'publishedDate');
$genre = filter_input(INPUT_POST, 'genre');
$isbn = filter_input(INPUT_POST, 'isbn');


$return = [];

if($id && $title && $image && $author && $description && $price && $publishedDate && $genre && $isbn) {
    $book = new Book($id, $title, $image, $author, $description, $price, $publishedDate, $genre, $isbn);
    $daoPublisher = new DaoBook();
    if($daoPublisher->updateBook($book)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);