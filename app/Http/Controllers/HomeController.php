<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show(){
        // return redirect()->to ('con');
return to_route('con');
    }
function user() {
    return to_route('wel');
}
    //

}
