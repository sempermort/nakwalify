<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Auth\Events\Registered;
use Socialite;
use Auth;
use App\Models\User;

class SocialGoogleController extends Controller
{

public function redirect()
{
    return Socialite::driver('google')->redirect();
}

public function callback()
{
    try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $user->id)->first();
            $userr2 = User::where('email', $user->email)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/category');
            }
            else if($userr2){
                Auth::login($userr2);
                return redirect('/category');
            }
            else{
                $namearray=explode(" ",$user->name);

                $newUser = User::create([
                    'fname' => $namearray[0],
                    'lname' => $namearray[1],
                    'email' => $user->email,
                    'role_id'=>'2',
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);
                event(new Registered($user));
                Auth::login($newUser);
                return redirect('/category');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }
}
