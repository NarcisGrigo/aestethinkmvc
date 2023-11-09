<?php

namespace Model\Repository;

use Model\Entity\User;
use Service\Session;

class UserRepository extends BaseRepository
{
    public function findByPseudo($user)
    {
        $requete = $this->dbConnection->prepare("SELECT * FROM user WHERE user = :user");
        $requete->bindParam(":user", $user);

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
        $sql = "INSERT INTO user (user, email, password, role) VALUES (:user, :email, :password, :role)";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":user", $user->getUser());
        $requete->bindValue(":email", $user->getEmail());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":role", $user->getRole());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success", "Le nouvel utilisateur a bien été enregistré");
                return true;
            }
            Session::addMessage("danger", "Erreur : l'utilisateur n'a pas été enregisté");
            return false;
        }
        Session::addMessage("danger", "Erreur SQL");
        return null;
    }


    public function updateAbonne(User $user)
    {
        $sql = "UPDATE user
                         SET user = :user, email = :email, password = :password, role = :role
                         WHERE id = :id";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":user", $user->getUser());
        $requete->bindValue(":email", $user->getEmail());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":role", $user->getRole());
        $requete->bindValue(":id", $user->getId());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success", "La mise à jour de l'utilisateur a bien été éffectuée");
                return true;
            }
            Session::addMessage("danger", "Erreur : l'utilisateur n'a pas été mise à jour");
            return false;
        }
        Session::addMessage("danger", "Erreur SQL");
        return null;
    }
}