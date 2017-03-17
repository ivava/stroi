<div class="region_heirarhy">
<ul id="">
<li>Республика Беларусь
   @if($locales['regions'])
   <ul>
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
       </li>
       </ul>
    </div>
    <script type="text/javascript">
      
    $(document).ready(function() {
   $('.region_heirarhy').jstree();
});
    </script>

