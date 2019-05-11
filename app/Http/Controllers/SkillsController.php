<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Skill;

class SkillsController extends Controller
{
    public function store(Request $request) {
        // $this -> validate($request, [
        //     "name" => 'required',
        //     ]);
            
        $input = $request -> all();
        
        // $input['user_id'] = $request -> get('user_id'); 
            
        Skill::create($input);
        
        return redirect('/');
    }
    
    public function delete(Request $request) {
                
    }
}
