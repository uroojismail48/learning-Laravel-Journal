<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
    //   echo $request -> email;
    //   echo "<br>";
    //       echo $request -> name;
    $request -> validate([
'name' => 'required | min:3 |max:30 ',
'email' => 'required | email',
'password' => 'required | min:8 | max:12',
    ],[
        'name.required' => "User field cannot be empty", 
      'email.required' => "@required write" 

        ]);
    return $request;
    }
    //
}
