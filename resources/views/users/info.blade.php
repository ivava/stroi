<h2>{{ $user->name or '' }}</h2>
<p><a href="{{ action('PagesController@showLocale', $region->id) }}"> {{ $region->name  or '' }}</a></p>
