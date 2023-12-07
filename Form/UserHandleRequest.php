<?php

namespace Form;

use Service\Session;
use Model\Entity\User;
use Model\Repository\UserRepository;

class UserHandleRequest extends BaseHandleRequest
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository;
    }

    public function handleForm(User $user)
    {
        if (isset($_POST['submit'])) {

            extract($_POST);
            $errors = [];

            // Validity verification
            if (empty($user)) {
                $errors[] = "The user can't be empty !";
            }
            if (strlen($user) < 4) {
                $errors[] = "The user requiers a minimum of 4 characters";
            }
            if (strlen($user) > 20) {
                $errors[] = "The user can't have more than 20 characters";
            }

            if (!strpos($user, " ") === false) {
                $errors[] = "Spaces are not authorized in the user";
            }

            // What if the user already exists in the db ?

            // $requete = $this->userRepository->findByPseudo($pseudo);
            $requete = $this->userRepository->findByAttributes($user, ["email" => $email]);
            if ($requete) {
                $errors[] = "The user seems to already exist, please choose another one";
            }

            if (!empty($name)) {
                if (strlen($name) < 2) {
                    $errors[] = "The name requiers a minimum of 2 charcaters";
                }
                if (strlen($name) > 30) {
                    $errors[] = "The name can't have more than 30 characters";
                }
            }
            if (!empty($email)) {
                if (strlen($email) < 2) {
                    $errors[] = "The email requiers a minimum of 2 charcaters";
                }
                if (strlen($email) > 30) {
                    $errors[] = "The email can't have more than 30 characters";
                }
            }
            if (empty($password)) {
                $errors[] = "Le mot de passe ne peut pas être vide";
            }

            if (empty($errors)) {
                $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
                $user->setName($name);
                $user->setEmail($email);
                return true;
            }

            $this->setEerrorsForm($errors);
        }
    }

    public function handleUpdate($id)
    {
    }
}