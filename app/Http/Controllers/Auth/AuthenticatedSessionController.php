<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $this->redirectTo();

        // return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->intended($this->redirectTo);
    }
    protected $redirectTo;
    public function redirectTo()
    {

      switch(Auth::user()->role_id){
         case 1:
         $this->redirectTo = '/instructordashboard';
         return $this->redirectTo;
             break;
         case 2:
                 $this->redirectTo = '/category';
             return $this->redirectTo;
             break;
         case 3:
             $this->redirectTo = '/business';
             return $this->redirectTo;
             break;
         default:
             $this->redirectTo = '/login';
             return $this->redirectTo;
     }
    }
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
