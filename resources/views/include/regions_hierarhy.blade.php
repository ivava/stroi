<div id="regionHeirarhy">
<ul class="region_hierarhy">
   @if($locales['regions'])
       @foreach($locales['regions'] as $regionLocal)
            <li>{{ $regionLocal->name }}</li>
           @endforeach
       @endif
    </div>

