@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Установить время ежедневной загрузки погоды</h3>
            <div class='col-sm-6 mt-5'>
                <form action="{{ route('schedule') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="time" class="col-4 col-form-label">Выбрать время</label>
                        <div class="col-8 clockpicker">
                            <input type="text" class="form-control" id="time" name="time" value="09:30">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <button class="btn btn-default mt-3" type="submit">Отправить</button>
                </form>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker({
                    autoclose: true
                });
            </script>
        </div>
    </div>
@endsection

