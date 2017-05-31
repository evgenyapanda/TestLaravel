@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                     <form name="test" method="get" action=" {{ route('users.index') }} ">
                        <p><b>Получить список всех пользователей</b><br>
                        <p><input type="submit" value="Получить">
                        {{ csrf_field() }}
                     </form>

                     <form name="test1" method="post" action=" {{ url('/allusers') }} ">
                        <p><b>Введите id пользователя</b><br>
                        <p><input type="text" name="id">
                        <p><input type="submit" value="Получить">
                        {{ csrf_field() }}
                     </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


