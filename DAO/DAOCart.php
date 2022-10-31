<?php
require_once ('connection.php');

class DAOCart {
    public function insertCart(Cart $cart) {
        try {
            $sql = 'INSERT INTO cart (name, price, quantity, image, total, user_id) VALUES (?, ?, ?, ?, ?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $cart->getName());
            $pst->bindValue(2, $cart->getPrice());
            $pst->bindValue(3, $cart->getQuantity());
            $pst->bindValue(4, $cart->getImage());
            $pst->bindValue(5, $cart->getTotal());
            $pst->bindValue(6, $cart->getUserId());

            if($pst->execute()) return true;
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    /*public function listCart() {
        $listCart = [];
        $sql = 'SELECT name, price, quantity, total, user_id FROM cart';
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $listCart = $pst->fetchAll(PDO::FETCH_ASSOC);

        return $listCart;
    }*/

    public function searchCart($id) {
        $listCart = [];
        $sql = 'SELECT * FROM cart WHERE user_id = ?;';
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
        $listCart = $pst->fetch(PDO::FETCH_ASSOC);

        return $listCart;
    }

    public function updateCart(Cart $cart) {
        try {
            $sql = 'UPDATE cart SET quantity = ?, total = ? WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $cart->getQuantity());
            $pst->bindValue(2, $cart->getTotal());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deleteCart(Cart $cart) {
        try {
            $sql = 'DELETE FROM cart WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $cart->getUserId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }
}
