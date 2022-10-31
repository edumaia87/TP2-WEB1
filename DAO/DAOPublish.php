<?php
require_once ('connection.php');

class DaoPublish {
    public function insertPublish(Publish $publish) {
        try {
            $sql = 'INSERT INTO publish (id, publisher_id, book_id) VALUES (?, ?, ?)';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $publish->getId());
            $pst->bindValue(2, $publish->getPublisherId());
            $pst->bindValue(3, $publish->getBookId());

            if($pst->execute()) return true;
            else return false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function listPublish() {
        $listPublish = [];
        $pst = Connection::getPreparedStatement('SELECT * FROM publish;');
        $pst->execute();
        $listPublish = $pst->fetchAll(PDO::FETCH_ASSOC);

        return $listPublish;
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

    /*public function updatePublish(Publish $publish) {
        try {
            $sql = 'UPDATE publish SET WHERE id = ?';
            $pst = Connection::getPreparedStatement($sql);

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (Exception $e) {
            return false;
        }
    }*/

    public function deletePublish(User $publish) {
        try {
            $sql = 'DELETE FROM publish WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            
            $pst->bindValue(1, $publish->getId());
            if ($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (Exception $e) {
            return false;
        }
    }
}