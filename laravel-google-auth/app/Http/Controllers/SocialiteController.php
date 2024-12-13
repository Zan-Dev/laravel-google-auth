<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
           
    }

    public function callback(){
        try{
            $userFromGoogle = Socialite::driver('google')->user();

            $userFromDB = User::where('email', $userFromGoogle->getEmail())->first();

            if(!$userFromDB){
                $userFromDB = new User();
                $userFromDB->email = $userFromGoogle->getEmail();
                $userFromDB->name = $userFromGoogle->getName();
                $userFromDB->google_id = $userFromGoogle->getId();
                $userFromDB->profile_pict = $userFromGoogle->getAvatar();

                $userFromDB->save();

                auth('web')->login($userFromDB);
                session()->regenerate();
                return redirect()->route('dashboard');
            }

            auth('web')->login($userFromDB);
            session()->regenerate();
            return redirect('profile');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google login failed.');
        }        
    }

    public function logout(Request $request){
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }

}
