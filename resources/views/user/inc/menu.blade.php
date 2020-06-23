<div class="wrap-main-nav">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="/">
                <img src="{{ asset('assets') }}/images/icons/logo-01.png" alt="LOGO">
            </a>
            <ul class="main-menu">
                <li class="main-menu-active">
                    <a href="/">Home</a>
                </li>
                <li class="mega-menu-item">
                    <a href="/category">News</a>
                    <div class="sub-mega-menu">
                        <div class="nav flex-column nav-pills" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
                            @if (count($category))
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($category as $cat)
                            <a class="nav-link" data-toggle="pill" href="#news-{{$i++}}" role="tab">{{$cat->type}}</a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </li>
                @if (count($category))
                @foreach ($category as $cat)
                @if ($cat == ($category[8]) ?? '')
                @php
                break ;
                @endphp
                @endif
                <li>
                    <a href="/category/{{$cat->id}}">{{$cat->type}}</a>
                    @if (count($cat->subType))
                    <ul class="sub-menu">
                        @foreach ($cat->subType as $sub)
                        <li><a href="category-01.html">{{$sub->type}}</a></li>
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