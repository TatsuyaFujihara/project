<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Sign_up;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
// ログイン画面
    public function index() 
    {
        return view('user/login');
    }

// サインアップ画面
    public function create()
    {
        return view('user/sign_up');
    }

// サインアップ動作（DB/バリデーション関係の動作）
    public function store(PostRequest $request)
    {
        $name = $request->name;
        // dd($name);
        return view('home', compact('name'));
    }
    

}
