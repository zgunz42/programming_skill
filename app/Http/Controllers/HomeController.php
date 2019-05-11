<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class HomeController extends Controller
{
    public function show() {
        $users = User::all();
        return view('home', ['users' => $users, 'Form' => 'Collective\Html\FormFacade']);
    }
}
