<?php
require_once('./User.php');
require_once ('./connection.php');

class DaoUser {
    public function insertUser(User $user) {
        try {
            $sql = 'INSERT INTO user (name, email, password, cpf, telefone, user_type) VALUES (?, ?, ?, ?, ?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $user->getName());
            $pst->bindValue(2, $user->getEmail());
            $pst->bindValue(3, $user->getPassword());
            $pst->bindValue(4, $user->getCpf());
            $pst->bindValue(5, $user->getTelefone());
            $pst->bindValue(6, $user->getUserType());

            if($pst->execute()) return true;
            else return false;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function listUser() {
        $listUser = [];
        $pst = Connection::getPreparedStatement('SELECT * FROM user;');
        $pst->execute();
        $listUser = $pst->fetchAll(PDO::FETCH_ASSOC);
        
        return $listUser;
    }

    public function searchUser() {
        $listUser = [];
        $sql = 'SELECT * FROM user WHERE id = ?';
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $listUser = $pst->fetch(PDO::FETCH_ASSOC);

        return $listUser;
    }

    public function updateUser(User $user) {
        try {
            $sql = $sql = 'UPDATE user SET name = ?, email = ?, password = ? cpf = ? teelefone = ? WHERE id = ?';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $user->getName());
            $pst->bindValue(2, $user->getEmail());
            $pst->bindValue(3, $user->getPassword());
            $pst->bindValue(4, $user->getCpf());
            $pst->bindValue(5, $user->getTelefone());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deleteUser(User $user) {
        try {
            $sql = 'DELETE FROM user WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $user->getId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        } catch (PDOException $e) {
            return false;
        }
    }
}