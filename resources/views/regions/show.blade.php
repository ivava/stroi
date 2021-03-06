@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    {{ $region->name }}
                </h3>

                <ul>
                    @if($users)
                        @foreach($users as $user)
                            <li><a href="/public/users/{{ $user->id }}">{{ $user->name }}</a></li>
                            @endforeach
                        @endif
                </ul>
            </div>
        </div>
    </div>
    @endsection