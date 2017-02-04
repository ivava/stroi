@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('include.errors')
                {!! Form::open(['url' => '/cities']) !!}
                {!! Form::label('name', 'Название') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                <label for="region">Регион</label>
                <select name="region" id="region">
                    @if($regions)
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}">
                                 {{ $region->name }}
                            </option>
                            @endforeach
                        @endif
                </select>
                {!! Form::submit('Создать') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection