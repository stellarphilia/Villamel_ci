<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function addUser(){
        return view('users/add');
    }
}
