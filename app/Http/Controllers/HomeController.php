<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Отображение главной страницы (welcome)
     */
    public function index()
    {
        return view('welcome');
    }
}
