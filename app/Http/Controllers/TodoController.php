<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $lists = Todo::all();
        return view('todo/todo', compact('lists'));
    }

    public function store(Request $request)
    {
        //  データベースへ書き込み
        $add = Todo::create
            ([
            'content' => $request->content,
            ]);
        return redirect('/todo');
    }

    public function destroy($id)
    {
        $del = Todo::find($id);
        $del->delete();
        return redirect('/todo');
    }
}
