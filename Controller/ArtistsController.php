<?php

namespace Controller;

use Controller\BaseController;

class ArtistsController extends BaseController
{
    public function liste()
    {
        $this->render("artists.php");
    }
}
