@extends('layouts.app')
@section('content')
    @include('flash::message')
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <h3>
                Создать новый регион
            </h3>
    <div class="form-group">
        @include('include.errors')
        {!! Form::open(['url' => 'regions'], ['class' => 'base_form']) !!}
        {!! Form::label('name', 'Название:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('parent_id', 'Родительский регион') !!}
       <select name="parent_id" id="parent_id">
           @if($locales)
                @foreach($allLocales as $locale)
                    <option value="{{ $locale->id }}">{{ $locale->name }}</option>
                    @endforeach
               @endif
       </select>

        {!! Form::label('type', 'тип') !!}
        <select name="type" id="type">
            @if($types)
                @foreach($types as $type)
                    <option value="{{ $type['alias'] }}">{{ $type['name'] }}</option>
                    @endforeach
                @endif
        </select>
        {!! Form::label('lead_id', 'Руководитель') !!}
        <select name="lead_id" id="lead_id">
            @if($users)
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                @endif
        </select>
        <br />
    {!! Form::submit('Создать') !!}
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
    @stop