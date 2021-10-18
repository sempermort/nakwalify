<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use Auth;
use App\Models\User;

class SocialFacebookController extends Controller
{

public function redirect()
{
    return Socialite::driver('facebook')->redirect();
}

public function callback()
{
    try {
            $user = Socialite::driver('facebook')->stateless()->user();
            dd($user);
            $user = User::where('facebook_id', $user->id)->first();

            if($user){
                Auth::login($user);
                return redirect('/category');
            }else{
                $newUser = User::create([
                    'fname' => $user->user['name']['first_name'],
                    'lname' => $user->user['name']['last-name'],
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('')
                ]);
                Auth::login($newUser);
                return redirect('/category');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }
}
