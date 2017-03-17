@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="info-profile">
                    <p>Имя: <span>{{ $user->name }}</span></p>
                    <p>Id: <span>{{ $user->id }}</span></p>
                    <p>Регион: <a href="/public/regions/{{ $region->id }}">{{ $region->name }}</a></p>

                </div>

            </div>

        </div>
    </div>
    @endsection