@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    @include('include.errors')
                    @if ($regions)
                        @foreach($regions as $region)
                            <li><a href="regions/{{ $region->id }}">{{ $region->name }}</a></li>
                            @endforeach
                        @endif
                </ul>
            </div>
        </div>
    </div>
    @endsection