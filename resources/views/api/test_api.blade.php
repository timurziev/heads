@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <a href="{{ url('api/weather?token=' .$token) }}">Узнать погоду</a>
        </div>
    </div>
@endsection
