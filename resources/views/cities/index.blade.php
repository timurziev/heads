@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><span style="font-size: large; margin-top: 5px; display: inline-block;">Города</span>
                        <form class="float-right" action="{{ route('cities.create') }}" method="get">
                            <button class="btn btn-success">Добавить</button>
                        </form>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">temp</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cities as $key => $city)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->current_temp }}</td>
                                    <td>
                                        <form class="float-left ml-2" action="{{ route('cities.delete', $city->id )}}" method="post">
                                            {!! method_field('delete') !!}
                                            {{ csrf_field() }}
                                            <button onclick="return confirm('Вы действительно хотите удалить город?');" type="submit" class="btn btn-outline-success btn-sm">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-5">{{$cities->links()}}</div>
            </div>
        </div>
    </div>
@endsection
