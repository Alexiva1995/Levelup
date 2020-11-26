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
   public function handle($request, Closure $next) {
      if(Auth::check()){
         $percentage = 0;
         $count = 0;
         $data_user_campo = DB::table('user_campo')
                              ->select('firstname', 'lastname', 'genero', 'edad', 'nameuser', 'direccion', 'direccion2', 'pais', 'estado', 'ciudad', 'codigo', 'phone', 'fijo', 'paypal')
                              ->where('ID', Auth::user()->ID)
                              ->first();
         $data_user_campo = @json_decode(json_encode($data_user_campo), true);
         $data_wp_users = DB::table('wp_users')
                           ->select('check_token_google')
                           ->where('ID', Auth::user()->ID)
                           ->first();     
         foreach ($data_user_campo as $user_ ) {
            if($user_ != NULL || !empty($user_)) $count++;
         }
         if ($data_wp_users->check_token_google != 0) $count++;
         $percentage = round(($count / (count($data_user_campo) + 1)) * 100, 0, PHP_ROUND_HALF_UP);
         View::share('percentage', $percentage);
      }
      
      return $next($request);
   }
}
