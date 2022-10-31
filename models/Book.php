<?php
class Book {
    private $id;
    private $title;
    private $author;
    private $description;
    private $price;
    private $publishedDate;
    private $genre;
    private $isbn;

    public function __construct($id, $title, $author, $description, $price, $publishedDate, $genre, $isbn) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->price = $price;
        $this->publishedDate = $publishedDate;
        $this->genre = $genre;
        $this->isbn = $isbn;
    }

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function getPublishedDate() {
        return $this->publishedDate;
    }

    public function setPublishedDate($publishedDate) {
        $this->publishedDate = $publishedDate;
        return $this;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
        return $this;
    }
}