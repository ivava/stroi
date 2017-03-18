@extends('layouts.app')
@section('content')
    @include('flash::message')
    @if($locales)
        <ul class="region_list">
        @foreach($locales as $locale)
                <input type="hidden" value="{{ csrf_token() }}" />
                <li> <h3>{{ $locale->name }}</h3>
                    <a href="{{ url('/regions/delete', [$locale->id]) }}">Удалить</a></li>
            @endforeach
        </ul>

        {{ $locales->links() }}
        @endif
    @stop