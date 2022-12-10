<?php
require_once('../DAO/DAOBook.php');
require_once('../models/Book.php');

$title = filter_input(INPUT_POST, 'title');
$image = filter_input(INPUT_POST, 'image');
$author = filter_input(INPUT_POST, 'author');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price');
$publishedDate = filter_input(INPUT_POST, 'publishedDate');
$genre = filter_input(INPUT_POST, 'genre');
$isbn = filter_input(INPUT_POST, 'isbn');

$return = [];

if($title && $image && $author && $description && $price && $publishedDate && $genre && $isbn) {
    $daoBook = new DaoBook();
    $book = new Book(null, $title, $image, $author, $description, $price, $publishedDate, $genre, $isbn);
    if($daoBook->insertBook($book)) {
        $return = ['status' => 'ok'];
    } else {
        $return = ['status' => 'sla'];
    }
} else {
    $return = ['status' => 'erro'];
}

echo json_encode($return);