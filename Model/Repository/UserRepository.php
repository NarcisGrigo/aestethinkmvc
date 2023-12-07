<?php

namespace Model\Repository;

use Model\Entity\User;
use Service\Session;

class UserRepository extends BaseRepository
{
    public function findByEmail($email)
    {
        $requete = $this->dbConnection->prepare("SELECT * FROM user WHERE email = :email");
        $requete->bindParam(":email", $email);

        if ($requete->execute()) {
            if ($requete->rowCount() == 1) {
                $requete->setFetchMode(\PDO::FETCH_CLASS, "Model\Entity\User");
                return $requete->fetch();
            } else {
                return false;
            }
        } else {
            return null;
        }
    }

    public function insertUser(User $user)
    {
        $sql = "INSERT INTO user (name, email, password, role) VALUES (:name, :email, :password, :role)";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":name", $user->getName());
        $requete->bindValue(":email", $user->getEmail());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":role", $user->getRole());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success", "The new user was successfully registered");
                return true;
            }
            Session::addMessage("danger", "Error : the user couldn't be registered");
            return false;
        }
        Session::addMessage("danger", "SQL Error");
        return null;
    }


    public function updateUser(User $user)
    {
        $sql = "UPDATE user
                         SET name = :name, email = :email, password = :password, role = :role
                         WHERE id = :id";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":name", $user->getName());
        $requete->bindValue(":email", $user->getEmail());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":role", $user->getRole());
        $requete->bindValue(":id", $user->getId());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success", "An update of the user has successfully been made");
                return true;
            }
            Session::addMessage("danger", "Error : the user couldn't be updated");
            return false;
        }
        Session::addMessage("danger", "SQL Error");
        return null;
    }
}