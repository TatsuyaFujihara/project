@extends('layouts.app')

@section('content')
    <div class="container">
{{-- 絞り込み機能の表示 --}}
    <div class="form-check-inline">
        <label><input class="form-check-input" type="radio" name="select" value="0" onclick="status()" checked>全て</label>    
        <label><input class="form-check-input" type="radio" name="select" value="1" onclick="status()">作業中</label>
        <label><input class="form-check-input" type="radio" name="select" value="2" onclick="status()">完了</label>
    </div>

{{-- 追加したタスクの表示 --}}
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">コメント</th>
                  <th scope="col">状態</th>
                </tr>
            </thead>
            @foreach ($lists as $list)
              　<tbody>
                    <tr class="tasks">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $list->content }}</td>
                        {{-- タスクの作業状態変更 --}}
                        <form method="post" action="{{ route('todo.update', $list->id) }}">
                            @csrf
                            @method('PUT')
                        @if ($list->state == 0)
                            <td>
                                <input class="unCompleted" type="submit" value="作業中">
                                <input type="hidden" name="state" value="1">
                            </td>
                        @else 
                            <td>
                                <input class="completed" type="submit" value="完了">
                                <input type="hidden" name="state" value="0">
                            </td>
                        @endif
                        </form>
                        {{-- タスクの削除機能 --}}
                        <td>
                            <form method="post" action="{{ route('todo.destroy', $list->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
{{-- 新規タスクの追加フォーム --}}
        <form action="/todo" method="post" enctype="multipart/form-data">
            @csrf
            <h3>新規タスク追加</h3>
            <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" id="content" class="form-control" name="content" value="{{ old('name') }}" autofocus>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        追加
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection