<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        print_r("Your age is".$request->age);
      echo "<br>";
        if($request -> age<18){
            die("Not Mature Enough");
        }
        echo "hello from AgeCheck";
        return $next($request);
    }
}
