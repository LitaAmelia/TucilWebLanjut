<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('register', $data);
    }
}
