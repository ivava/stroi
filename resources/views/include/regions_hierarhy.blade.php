<div id="regionHeirarhy">
<ul class="region_hierarhy">
   @if($locales['regions'])
       @foreach($locales['regions'] as $regionLocal)
            <li>{{ $regionLocal->name }}
            @if($regionLocal->getChild())
                <ul>
                    @foreach($regionLocal->getChild() as $area)
                        <li>{{ $area->name }}
                            @if($area->getChild())
                                <ul>
                                    @foreach($area->getChild() as $branch)
                                        <li>{{ $branch->name }}</li>
                                        @endforeach
                                </ul>
                                @endif
                        </li>
                        @endforeach
                </ul>
                @endif
            </li>
           @endforeach
       @endif
    </div>

