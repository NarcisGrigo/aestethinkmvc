<?php

namespace Controller;

use Controller\BaseController;

class ContactController extends BaseController
{
    public function liste()
    {
        $this->render("contact.php");
    }
}
