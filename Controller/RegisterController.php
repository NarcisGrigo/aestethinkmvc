<?php

namespace Controller;

use Controller\BaseController;

class RegisterController extends BaseController
{
    public function liste()
    {
        // Assuming you have some logic to determine the file name
        $fichier = 'register.html.php';

        // Use the BaseController method to render
        $this->render($fichier);
    }
}

