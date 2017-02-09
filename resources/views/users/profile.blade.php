@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 user_profile">
                @include('users.info')
            </div>
        </div>
    </div>
    @endsection