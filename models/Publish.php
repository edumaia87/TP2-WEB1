<?php
class Publish {
    private $publisherId;
    private $bookId;

    public function __construct($publisherId, $bookId) {
        $this->publisherId = $publisherId;
        $this->bookId = $bookId;
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