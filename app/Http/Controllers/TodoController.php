<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
// Todoタスク一覧
    public function index()
    {
        $lists = Todo::all();
        return view('todo/todo', compact('lists'));
    }

// タスク追加機能
    public function store(Request $request)
    {
        $add = Todo::create
            ([
            'content' => $request->content,
            ]);
        return redirect('/todo');
    }
// タスクの削除機能
    public function destroy($id)
    {
        $del = Todo::find($id);
        $del->delete();
        return redirect('/todo');
    }

// 作業状態の更新
    public function update(Request $request, $id) {
        $state = Todo::find($id)
        ->update(['state' => $request->state]);
        return redirect('/todo');
    }
}
