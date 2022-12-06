<?php
require_once ('connection.php');

class DAOBuys {
    public function insertBuy(Buys $buys) {
        try {
            $sql = 'INSERT INTO buys (book_id, user_id, price, sale_date) VALUES (?, ?, ?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $buys->getBookId());
            $pst->bindValue(2, $buys->getUserId());
            $pst->bindValue(3, $buys->getPrice());
            $pst->bindValue(4, $buys->getSaleDate());

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

    public function seearchAllOrders() {
        $listOrders = [];
        $sql = 'SELECT book.title, user.name, user.cpf, buys.price, buys.sale_date FROM buys
        JOIN book ON book.id = buys.book_id
        JOIN user ON buys.user_id = user.id
        ORDER BY buys.id DESC;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $listOrders = $pst->fetch(PDO::FETCH_ASSOC);

        return $listOrders;
    }

    public function searchOrders($id) {
        $listOrders = [];
        $sql = 'SELECT book.title, buys.price, buys.sale_date FROM book
        JOIN buys ON buys.book_id = book.id
        JOIN user ON buys.user_id = user.id
        WHERE user.id = ?
        ORDER BY buys.id DESC;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
        $listOrders = $pst->fetch(PDO::FETCH_ASSOC);

        return $listOrders;
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