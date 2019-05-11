<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function store(Request $request) {
        $this -> validate($request, [
            'name' => 'required|regex:/^[a-zA-Z ]+$/u|max:255',
            ]);
        User::create($request->all());
        return redirect('/');
    }
    
    public function delete(Request $request) {
                
    }
}
