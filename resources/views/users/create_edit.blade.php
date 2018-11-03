@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <h2 class="mb-5">{{ Request::is('*/edit/*') ? 'Редактирование пользователя' : 'Создание пользователя' }}</h2>
                <form action="@if (Request::is('*/edit/*')){{ route('users.update', $user->id) }} @else {{ route('users.store') }} @endif" method="post">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Имя</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="name" name="name" required value="{{ $user->name ?? '' }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="email" name="email" required value="{{ $user->email ?? '' }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label">Пароль</label>
                        <div class="col-10">
                            <input type="password" class="form-control" id="password" name="password" {{ Request::is('*/create') ? 'required' : '' }}>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
