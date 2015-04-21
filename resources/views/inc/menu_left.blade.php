<ul id="main-nav" class="open-active" data-id="{{ asset($manu['mainManu']) }}">
    @foreach($manu['leftManu'] as $key => $value)

    <?php  if (!isset($value['child'])) { ?>
       <li class="" onclick="changePage('{!! asset($value["url"]) !!}');">				
             <a>
                <i class='fa fa-indent'></i>
                {{ $value['name'] }}
             </a>   				
       </li>

    <?php } else { ?>
        <li class="dropdown">
                    <a href="javascript:;">
                            <i class="fa fa-caret-square-o-down"></i>
                             {{ $value['name'] }}
                            <span class="caret"></span>
                    </a>				

                    <ul class="sub-nav">
                        @foreach($value['child'] as $val)

                            <li onclick="changePage('{!! asset($val["url"]) !!}');">
                                    <a >
                                            <i class="fa fa-angle-double-right"></i> 
                                            {{ $val['name'] }}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
        </li>
    <?php } ?>
   @endforeach
</ul>	