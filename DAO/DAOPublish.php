<?php
require_once ('connection.php');

class DaoPublish {
    public function insertPublish(Publish $publish) {
        try {
            $sql = 'INSERT INTO publish (publisher_id, book_id) VALUES (?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getPublisherId());
            $pst->bindValue(2, $publish->getBookId());

            if($pst->execute()) return true;
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function searchPublish($id) {
        $listPublish = [];
        $sql = 'SELECT * FROM publish WHERE id = ?;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
        $listPublish = $pst->fetchAll(PDO::FETCH_ASSOC);

        return $listPublish;
    }

    public function listPublish() {
        $listPublish = [];
        $sql = 'SELECT publish.id, publish.book_id, publish.publisher_id, book.title, publisher.name, book.published_date, book.image FROM book
        JOIN publish ON publish.book_id = book.id
        JOIN publisher ON publish.publisher_id  = publisher.id;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $listPublish = $pst->fetchAll(PDO::FETCH_ASSOC);

        return $listPublish;
    }

    public function updatePublish(Publish $publish) {
        try {
            $sql = 'UPDATE publish SET publisher_id = ?, book_id = ? WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getPublisherId());
            $pst->bindValue(2, $publish->getBookId());
            $pst->bindValue(3, $publish->getId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function deletePublish(Publish $publish) {
        try {
            $sql = 'DELETE FROM publish WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getId());

            if ($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deletePubByBookId(Publish $publish) {
        try {
            $sql = 'DELETE FROM publish WHERE book_id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getBookId());

            if ($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deletePubByPubId(Publish $publish) {
        try {
            $sql = 'DELETE FROM publish WHERE publisher_id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getPublisherId());

            if ($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }
}