<?php 

namespace App\Core\Services\Auth ; 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Flash ; 

use Session ; 

use App\Core\helpers\DetectMobile   ; 


trait AuthenticatesUsers { 

   /**
     * Show the users's login form.
     *
     * @return \Illuminate\Http\Response
     */
   public function showLoginForm(){

    $detect = new DetectMobile();

    return view('auth.login')->with('detect',$detect);

}

    /**
     *  BackupLogin
     **/
    public function showBasicLogin(){

        return view('auth.login2');

    }

    /**
     * Show the admin's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdminLoginForm(){

        return view('auth._admin_login');

    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        $this->validateLogin($request); 


        if ($this->attemptLogin($request)){ 


            $request->session()->regenerate();
            
            return $this->authenticated($request, $this->guard()->user()) ?: redirect()->route($this->redirectPath());
            
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors($errors);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
    	$this->validate($request, [

         $this->username() => 'required',
         'password' => 'required',

     ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request){
    	return $this->guard()->attempt($this->credentials($request), $request->has('remember'));
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {

        $field = filter_var($request->input('pin'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $request->merge([$field => $request->input('pin')]);

        return $request->only($field, 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request){
    	$request->session()->regenerate();
        return $this->authenticated($request, $this->guard()->user())  ? : redirect()->route($this->redirectRoute($this->guard()->user())) ; 
    }

    public function redirectPath()
    {
        switch ($this->guard()->user()->role_id) 
        {
            case 1:  return 'admin.dashboard' ; break ;

            
            case 2:  return 'socialworker.dashboard';break; 
            

            case 3:  return 'courier.dashboard';break;             
            


            default: return redirect()->back()->withInput();
        }   
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user){



    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
    	$errors = [$this->username() => trans('auth.failed')];
    	if ($request->expectsJson()) {
    		return response()->json($errors, 422);
    	}

    	return redirect()->back()
    	->withInput($request->only($this->username(), 'remember'))
    	->withErrors($errors);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {

        return 'pin';

    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
    	\Auth::logout();


        flash()->overlay('You have successfully logged out', 'Success') ; 
        

        return redirect()->back(); 
        



    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
    	return Auth::guard();
    }

}