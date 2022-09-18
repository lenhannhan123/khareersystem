<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use function PHPUnit\Framework\isEmpty;

class checklink
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $domain =$_SERVER["HTTP_HOST"];

        if($domain=="www.khareer.com"){
            if(isset($_SERVER["HTTPS"])==false ){
                if(isset($_SERVER["REDIRECT_URL"])){
                    return redirect("https://www.khareer.com".$_SERVER["HTTPS"]);
                }else{
                    return redirect("https://www.khareer.com");
                }

                
            }else{
                return $next($request);
            }
        }
    

       
       

        if($domain=="svit.khareer.com"){

            if(isset($_SERVER["HTTPS"])==false ){
                return redirect("https://www.svit.khareer.com/");
            }else{
                return response(view('svit.svitindex'));
            }
          
        }
      

        return $next($request);
       
      
       
    }
}
