<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('sessions.create');
        
    }

    public function store(){

        $this->validate(request(),[
            'name' => 'required | min:4',
            'email' => 'required | email',
            'passworkd' => 'required'
        ]);
        
    }


}
