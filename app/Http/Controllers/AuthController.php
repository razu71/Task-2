<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthenticateRequest;
//use Auth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn(){
        return view('login');
    }

    public function signInProcess(AuthenticateRequest $request){
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return response()->json(['success' => 'successfully logged in']);
        } else {
            return response()->json(['error' => 'Error in logged in']);
        }
    }
}
