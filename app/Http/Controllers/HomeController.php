<?php

namespace App\Http\Controllers;

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
