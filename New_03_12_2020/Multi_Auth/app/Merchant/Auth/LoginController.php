<?php

namespace App\Http\Controllers\Backend\Merchant\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsersMerchant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsersMerchant;

    protected $redirectTo = HS_MERCHANT_DASHBOARD_URL_ALFTER_LOGIN;

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest:merchant')->except('logout');
    }
        


    public function showMerchantLoginForm()
    {
        return view('frontend.merchant_auth.login');
    }


    public function logout(Request $request)
    {
        //extra added here
            $user = Auth::guard('merchant')->user();
            $user->login_status = 0;
            if(HS_MERCHANT_BEFORE_LOGOUT_PASSWORD_FIELD_NULL_ACTIVE)
            {
                $user->password = NULL;
            }
            if(HS_MERCHANT_BEFORE_LOGOUT_OTP_FIELD_NULL_ACTIVE)
            {
                $user->otp = NULL;
            }
            $user->save();
        //extra added here

        $this->guard('merchant')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($response = $this->loggedOut($request)) {
                return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('home');
    }

    protected function guard()
    {
        return Auth::guard('merchant');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginAttempt(Request $request)
    {

       /*  $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        } */
        $credentials = ['phone' => $request->phone, 'otp' => $request->otp];

        //if (Auth::guard('merchant')->attempt($credentials, false, false)) {

        //$credentials = $request->only('email', 'password');

        if(Auth::guard('merchant')->attempt($credentials)){
            $user = Auth::guard('merchant')->user();
            //$success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['token'] =  $user->accessToken;
            //return response()->json(['success' => $success], $this->successStatus);
            session()->flash('msg','Login Successfully!');
            response()->json(['success' => $success]);
            return redirect()->route('merchant.order.k');
            return redirect()->route('home');
        }
        else{
            return response()->json(['error'=>'Email or password incorrect'], 401);
        }



        if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

            if ($this->attemptLogin($request)) {
            //extra added here
                $user = auth()->user();
                $user->login_status = 1;
                $user->save();
            //extra added here
            if(auth()->user()->role_id != HS_MERCHANT_USER_ROLE_ID || auth()->user()->role_id != HS_DELIVERYMAN_USER_ROLE_ID)
            {
                return $this->sendLoginResponse($request);
            }
            else{
                $user = auth()->user();
                $user->login_status = 0;
                $user->save();
                Auth::logout();
                return redirect()->route(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME);
            }
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        //$this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);



            $credentials = $request->except('_token');

				/* $validator = Validator::make($input,[
				'email' = 'required|email',
				'password' = 'required|min:6'
				]);

			if($validator->fails()){
			    return redirect()->back()->withErrors($validator)->withInput();
            } */
            $request->email = "alamgir@gmail.com";
            $request->password = "123456";
            //$email = "alamgir@gmail.com";
            //$password = "123456";
            $credentials = ['email' => $request->email, 'password' => $request->password];

            if (Auth::guard('merchant')->attempt($credentials, false, false)) {
                //return ['result' => 'ok'];
                $request->session()->invalidate();
                //$request->session()->regenerateToken();
                $request->session()->regenerate();
                session()->flash('msg','Login Successfully!');
				return redirect()->route('home');
            }


            return ['result' => 'not ok'];

			if(Auth::attemp(['email'=>$email,'password'=>$password])){
                session()->flash('msg','Login Successfully!');
				return redirect()->route('home');
            }
			//if(Auth::guard('admin')->attemp()){}	[by default guard = user.. its from config->auth.php]

			if(Auth::attemp($credentials)){
				session()->flash('msg','Login Successfully!');
				return redirect()->route('home');
			}
				session()->flash('error','Wrong Credentials');
            return redirect()->back();


       /*  if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            // The user is active, not suspended, and exists.
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            //
        }

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            // The user is being remembered...
        } */
    }



}
