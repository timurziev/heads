@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <h2 class="mb-5">Добавление города</h2>
                <form action="{{ route('cities.store') }}" method="post">
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
                        <label for="name" class="col-2 col-form-label">Название</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
