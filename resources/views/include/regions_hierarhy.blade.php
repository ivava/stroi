<div id="regionHeirarhy">
<ul class="region_hierarhy">
    @foreach($regions as $reg)
        <li data-jstree="{opened: true}">
            {{ $reg->name }}
            @if($reg->cities)
                <ul>
                @foreach($reg->cities as $city)
                    <li>
                        {{ $city->name }}
                        @if ($city->departaments)
                            <ul>
                                @foreach($city->departaments as $departament)
                                    <li>{{ $departament->name }}</li>
                                    @endforeach
                            </ul>
                            @endif
                    </li>
                    @endforeach
                        </ul>
                @endif
        </li>
        @endforeach
</ul>
    </div>

