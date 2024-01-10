<?php

namespace Controller;

use Controller\BaseController;

class CollectionController extends BaseController
{
    public function liste()
    {
        $this->render("collections.php");
    }
}
