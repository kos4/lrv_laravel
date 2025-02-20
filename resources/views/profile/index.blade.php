@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Ваш профиль</h1>
                <p><b>ID</b> {{ $user->id }}</p>
                <p><b>Имя:</b> {{ $user->name }}</p>
                <p><b>E-mail:</b> {{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection
