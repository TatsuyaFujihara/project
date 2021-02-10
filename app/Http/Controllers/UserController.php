<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
// サインアップ画面
    public function sign_up() {
        return view('user/sign_up');
    }

// ログイン画面
public function login() {
    return view('user/login');
}
}
