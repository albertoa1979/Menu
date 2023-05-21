<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        echo view('home');
        echo view('header');
        echo view('footer');
    }
}
?>