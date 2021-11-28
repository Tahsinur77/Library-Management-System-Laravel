<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Admin;

class userchecking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin = Admin::where(['phonenumber'=>$request->phoneNumber,'password'=>$request->password])->first();
        if($request->session()->has('id')){
            $request->session()->forget('id');
        }

        if($admin != ""){
            $request->session()->put('id',$admin->id);  
            $request->session()->put('name',$admin->name);
        }
        

        return $next($request);
    }
}
