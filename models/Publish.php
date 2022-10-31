<?php
class Publish {
    private $id;
    private $publisherId;
    private $bookId;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPublisherId() {
        return $this->publisherId;
    }

    public function setPublisherId($publisherId) {
        $this->publisherId = $publisherId;
    }

    public function getBookId() {
        return $this->bookId;
    }

    public function setBookId($bookId) {
        $this->bookId = $bookId;
    }
}