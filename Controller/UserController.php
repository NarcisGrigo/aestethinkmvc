<?php

namespace Controller;

use Model\Entity\User;
use Form\UserHandleRequest;
use Controller\BaseController;
use Model\Repository\UserRepository;

class UserController extends BaseController
{
    private $userRepository;
    private $form;
    private $user;

    public function __construct()
    {
        $this->userRepository = new UserRepository;
        $this->form = new UserHandleRequest;
        $this->user = new User;
    }
    public function liste()
    {
        $users = $this->userRepository->findAll($this->user);

        $this->render("login.html.php", [
            "h1" => "Liste des utilisateurs",
            "users" => $users
        ]);
    }
    public function new()
    {
        $user = $this->user;
        $this->form->handleForm($user);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->userRepository->insertUser($user);
            return redirection(addLink("home"));
        }

        $errors = $this->form->getEerrorsForm();

        return $this->render("user/register.html.php", [
            "h4" => "Ajouter un nouvel utilisateur",
            "user" => $user,
            "errors" => $errors
        ]);
    }
    public function edit($id)
    {

    }

    public function show($id)
    {

    }
    public function login()
    {

    }
}