@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><span style="font-size: large; margin-top: 5px; display: inline-block;">Пользователи</span>
                        <form class="float-right" action="{{ route('users.create') }}" method="get">
                            <button class="btn btn-success">Добавить</button>
                        </form>
                    </div>

                    <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <form class="float-left" action="{{ route('users.edit', $user->id )}}" method="get">
                                                    <button type="submit" class="btn btn-outline-success btn-sm">Редактировать</button>
                                                </form>
                                                <form class="float-left ml-2" action="{{ route('users.delete', $user->id )}}" method="post">
                                                    {!! method_field('delete') !!}
                                                    {{ csrf_field() }}
                                                    <button onclick="return confirm('Вы действительно хотите удалить пользователя?');" type="submit" class="btn btn-outline-success btn-sm">Удалить</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="mt-5">{{$users->links()}}</div>
            </div>
        </div>
    </div>
@endsection
