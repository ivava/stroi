@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Создать пользователя</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ФИО</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Логин</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('location') ? 'has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Регион</label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}"
                                required />
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? 'has-error' : '' }}">
                            <label for="position"  class="col-md-4 control-label">Должность</label>
                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}"
                                       required />
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? 'has-error' : '' }}">
                            <label for="departament" class="col-md-4 control-label">Отдел</label>
                            <div class="col-md-6">
                                <input id="departament" type="text" class="form-control" name="departament"
                                value="{{ old('departament') }}" required />
                                @if ($errors->has('departament'))
                                    <strong>{{ $errors->first('departament') }}</strong>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('parent_user') ? 'has-error' : '' }}">
                            <label for="parent_user" class="col-md-4 control-label">Руководитель</label>
                            <div class="col-md-6">
                                <input id="parent_user" type="text" class="form-control" name="parent_user"
                                       value="{{ old('parent_user') }}" required/>
                                @if ($errors->has('parent_user'))
                                    <strong>{{ $errors->first('parent_user') }}</strong>
                                    @endif

                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label>Админ?</label>--}}
                            {{--<input type="checkbox" name="is_admin" value="true" id="is_admin" />--}}
                        {{--</div>--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Потвердите пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Создать
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
