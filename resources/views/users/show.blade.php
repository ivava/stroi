@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Имя:</p>
                <h3>
                    {{ $user->name }}
                </h3>
                <p>id:</p>
                <h3>
                    {{ $user->id }}
                </h3>
                <p>region:</p>
                <h3>
                    {{ $region->name }}
                </h3>
            </div>

        </div>
    </div>
    @endsection