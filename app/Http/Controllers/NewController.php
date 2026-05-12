<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //

    function list(){
        return "list of lists";
    }
    
    function add(){
        return "add to lists";
    }

    
    function delete(){
        return "Delete to lists";
    }
}



