@extends('layouts.app')

@section('content')
    <div class="container">
{{-- 絞り込み機能の表示 --}}
        <div class="form-check form-check-inline mb-1">
            <input type="radio">
            <label>すべて</label>
        </div>
        <div class="form-check form-check-inline mb-1">
            <input type="radio">
            <label>作業中</label>
        </div>
        <div class="form-check form-check-inline mb-1">
            <input type="radio">
            <label>完了</label>
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
            <?php $counter=1; ?>
            @foreach ($lists as $list)
              　<tbody>
                  <tr>
                      <th scope="row">{{ $counter }}</th>
                      <td>{{ $list->content }}</td>
                      <td><button type="button">作業中</button><button type="button">削除</button></td>
                    </tr>
                </tbody>
                <?php $counter++; ?>
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
                        {{ __('追加') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection