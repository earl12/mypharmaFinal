<?php namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
class isCourier
{


    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest ()) {
            if ($request->ajax ()) {
                return response ( 'Unauthorized.', 401 );
            } else {
                return redirect ()->guest ( 'login' );
            }
        } else {
            if ($this->auth->user ()->hasRole('Courier')){
                return $next ( $request );
            } else {
                return redirect()->to('login');
            }
        }    
    }
}
