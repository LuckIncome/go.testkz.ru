<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">@lang('general.home')</a>
    </li> 
    @if(isset($subtitle))
        @if(isset($titleLink))
            <li class="breadcrumb-item">
                <a href="{{$titleLink}}">{{$title}}</a>
            </li>
        @else
            <li class="breadcrumb-item breadcrumb-item-active" aria-current="page">{{$title}}</li>
        @endif
        @if(isset($childTitle))
            <li class="breadcrumb-item">
                <a href="{{$subtitleLink}}">{{$subtitle}}</a>
            </li>
            @if(isset($subChildTitle))
                <li class="breadcrumb-item">
                    <a href="{{$childLink}}">{{$childTitle}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$subChildTitle}}</li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{$childTitle}}</li>
            @endif
            @else
                <li class="breadcrumb-item active" aria-current="page">{{$subtitle}}</li>
            @endif
            @else
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>                                                          
    @endif
</ol>