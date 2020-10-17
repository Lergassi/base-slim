<?php

namespace App\Controllers;

use Source\AbstractController;

class SiteController extends AbstractController
{
    public function homepage($request, $response)
    {
        $response->getBody()->write(get_class($this));

        return $response;
    }
}