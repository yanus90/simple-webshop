<header class="header-transparant">
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
        <div class="container">
{{--            <a class="navbar-brand" href="{{ home_url() }}">--}}
{{--                {{ $siteName }}--}}
{{--            </a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fad fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <div class="position-relative">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fad fa-bars navbar-toggler-icon"></i>
                    </button>
                </div>
                @if($navigation && $navigation->isNotEmpty())
                    <ul class="navbar-nav">
                        @foreach($navigation->toArray() as $item)
                            @if(!$item->children)
                                <li class="nav-item nav-item-spaced d-none d-lg-block">
                                    <a class="nav-link {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" title="{{ $item->label }}" {{ ($item->target ? 'target='.$item->target : '') }}>
                                        {!! $item->label !!}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
                <ul class="navbar-nav ml-lg-auto">
                    <li>
                        <a href="#" title="{{ __('Winkelwagen', 'sage') }}" class="btn btn-success rounded-circle btn-icon-only">
                            <i class="fal fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>