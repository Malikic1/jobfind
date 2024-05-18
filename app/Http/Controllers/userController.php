<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class userController extends Controller
{
  public  function register(Request $request) { 
        $incomingFields = $request -> validate(
            [
                "name"=> "required", 
                "email"=> ["required", Rule::unique('users', 'email')],
                "password"=> ['required','min:8','max:200'],
                "c_password"=> ['required','min:8','max:200'],
                 
            ]);

             
            if ($incomingFields['password'] == $incomingFields['c_password']) {
                $incomingFields['password'] = bcrypt($incomingFields['password']);     
                $User =   User::create($incomingFields);
                @auth()->login($User); 
                return redirect('/');
            }

    }

    public function logout() {   
        auth()->logout();   
        return redirect('/');   
    }

    public function login(Request $request) {   
        $incomingData = $request -> validate(
            [
                'loginemail'=> 'required',
                'loginpassword'=> ['required','min:8','max:200'],
            ]
        );

        if (auth()->attempt(['email' => $incomingData['loginemail'],'password'=> $incomingData['loginpassword']])) {
            $request -> session()-> regenerate();
            return redirect('/');
        }
        return redirect('/');
        ;
    }
}