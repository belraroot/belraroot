<?php

namespace App\Controller;

use Codecomodo\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('php/home');
    }
}