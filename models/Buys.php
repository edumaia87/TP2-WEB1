<?php
class Buys {
    private $id;
    private $bookId;
    private $userId;
    private $price;
    private $saleDate;

    public function __construct($id, $bookId, $userId, $price, $saleDate) {
        $this->id = $id;
        $this->bookId = $bookId;
        $this->userId = $userId;
        $this->price = $price;
        $this->saleDate = $saleDate;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getBookId() {
        return $this->bookId;
    }

    public function setBookId($bookId) {
        $this->bookId = $bookId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getprice() {
        return $this->price;
    }

    public function setprice($price) {
        $this->price = $price;
    }

    public function getSaleDate() {
        return $this->saleDate;
    }

    public function setSaleDate($saleDate) {
        $this->saleDate = $saleDate;
    }
}