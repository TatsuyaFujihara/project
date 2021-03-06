@extends('layouts.app')

@section('content')
<div class="container">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
                <a href="todo" class="ml-5">・To-Doリストアプリ</a>
            </div>
        </div>
    </div>
</div>
@endsection
