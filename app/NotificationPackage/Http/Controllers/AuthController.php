<?php

namespace App\NotificationPackage\Http\Controllers;

use App\Base\BaseEntity;
use App\Http\Requests\LoginRequest;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseEntity
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
        if (Auth::check()){
            Auth::logout();
            return redirect()->route('home');
        }else{
            return redirect()->route('home');
        }
    }
    public function LoginRequest(LoginRequest $request)
    {
        if (Auth::guard('web')->attempt($request->only(['username','password']))){
            return redirect()->route('home');
        }else{
            dd('bad login');
        }
    }
}
