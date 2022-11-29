<?php

namespace App\Controllers;

class TablaController extends BaseController
{
    public function tabla()
    {
        echo view('tabla/header_tabla');
        echo view('templates/navbar');
        echo view('tabla/tabla');
      //  echo view('tabla/footer_tabla');
    }
}
