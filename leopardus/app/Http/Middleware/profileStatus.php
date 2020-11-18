<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class profileStatus
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
        $percentage = 0;

        // $data_user_campo = DB::table('user_campo')
        //             ->select('firstname', 'lastname', 'genero', 'edad', 'nameuser', 'direccion', 'direccion2', 'pais', 'estado', 'ciudad', 'codigo', 'phone', 'fijo', 'paypal')
        //             ->where('ID', Auth::user()->ID)
        //             ->first();

        // $data_wp_users = DB::table('wp_users')
        //             ->select('user_email', 'user_pass', 'password', 'clave', 'check_token_google')
        //             ->where('ID', Auth::user()->ID)
        //             ->first();
        
        // var_dump($data_user_campo);
        // var_dump($data_wp_users);

        

        View::share('percentage', $percentage);

        return $next($request);
    }
}
