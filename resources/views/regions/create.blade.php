@extends('layouts.app')
@section('content')
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <h3>
                Создать новый регион
            </h3>
    <div class="form-group">
        @include('include.errors')
        {!! Form::open(['url' => 'regions']) !!}
        {!! Form::label('name', 'Название:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('parent_id', 'Родительский регион') !!}
        <label for="parantId"></label>
        <select name="parent_id" id="parentId">
            // TODO: здесь вывоятся все типы
        </select>
        <br />
    {!! Form::submit('Создать') !!}
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
    @stop