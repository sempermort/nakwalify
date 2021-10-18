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

            $userr = User::where('facebook_id', $user->id)->first();
         
            if($userr){
                Auth::login($userr);
                return redirect('/category');
            }else{
                $namearray=explode(" ",$user->name);
                $newUser = User::create([
                    'fname' => $namearray[0],
                    'lname' => $namearray[1],
                    'email' => $user->email,
                    'role_id'=>'2',
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
