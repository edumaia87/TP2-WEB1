<?php
require_once ('connection.php');

class DAOBuys {
    public function insertBuy(Buys $buys) {
        try {
            $sql = 'INSERT INTO buys (book_id, user_id, total_books, total_price, payment_method) VALUES (?, ?, ?, ?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $buys->getBookId());
            $pst->bindValue(2, $buys->getUserId());
            $pst->bindValue(3, $buys->getTotalBooks());
            $pst->bindValue(4, $buys->getTotalPrice());
            $pst->bindValue(5, $buys->getPaymentMethod());

            if($pst->execute()) return true;
            else return false;
        } catch (PDOException $e) {
           return false;
        }
    }

    public function listBuy() {
        $listBuys = [];
        $sql = 'SELECT * FROM buys';
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $listBuys = $pst->fetchAll(PDO::FETCH_ASSOC);

        return $listBuys;
    }

    public function searchBuy($id) {
        $listBuys = [];
        $sql = 'SELECT * FROM buys WHERE id = ?;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
        $listBuys = $pst->fetch(PDO::FETCH_ASSOC);

        return $listBuys;
    }

    /*public function updateBuy(Buys $buys) {
        try {
            $sql = 'UPDATE buys SET WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
           return false;
        }
    }*/


    public function deleteBuy(Buys $buys) {
        try {
            $sql = 'DELETE FROM buys WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $buys->getUserId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
           return false;
        }
    } 
}