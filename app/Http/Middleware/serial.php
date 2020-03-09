<?php

namespace App\Http\Middleware;
use Ixudra\Curl\Facades\Curl;
use Closure;

class serial
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

  

        $mac_string = shell_exec("arp -a");
        $mac_array = explode(" ",$mac_string);
        $mac = $mac_array[3];


              $response = Curl::to('http://3.217.211.81/webkey/')
                   ->withData( array( 'serial' => $mac ) )
                   ->get();

               // dd($response);
        if($response ==='true'){
              return $next($request);
            }else{
              return false;
            }

    }
}
