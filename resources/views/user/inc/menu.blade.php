<div class="wrap-main-nav">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="/">
                <img src="{{ asset('assets') }}/images/icons/logo-01.png" alt="LOGO">
            </a>
            <ul class="main-menu">
                @if (count($category))
                @foreach ($category as $cats)
                <li class="@if ($cat->p_id == $cats->id)
                    main-menu-active
                @endif">
                    <a href="/category/{{$cats->id}}">{{$cats->type}}</a>
                    @if (count($cats->subType))
                    <ul class="sub-menu">
                        @foreach ($cats->subType as $sub)
                        <li><a href="/category/{{$sub->id}}">{{$sub->type}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
                @endif
            </ul>
        </nav>
    </div>
</div>