<div class="menu-top-scroll menu-fixed">
    <header>
        <div class="header-bar-search search-form" id="flisearchform">
            <div class="wraper">
                <div class="container">
                    <div class="search-form-inner">
                        <form action="/seek/" method="get">
                            <div class="form-group">
                                <label>Enter search keywords</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" maxlength="60"
                                        placeholder="Tìm...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-search fa-flip-horizontal"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-banner hidden"></div>
        <div class="section-header-bar hidden">
            <div class="wraper">
                <nav class="header-nav">
                    <div class="header-nav-inner">
                        <div class="contactDefault">
                        </div>
                        <div class="social-icons">
                        </div>
                        <div class="personalArea">
                        </div>
                    </div>
                    <div id="tip" data-content="">
                        <div class="bg"></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="section-header non-home">
            <div class="wraper">
                <div id="header">
                    <div class="logo hide-logo">
                        <div class="text-site"><a title="Hanoi University of Science and Technology &#40;HUST&#41;"
                                href="/"><img src="{{ asset('web/uploads/sys/logo-website02_136_200_1.png') }}"
                                    alt="Hanoi University of Science and Technology &#40;HUST&#41;"></a>
                            <ul class="text-sologan">
                                <li class="bo">
                                    <a href="/">Đại học bách khoa Hà Nội</a>
                                </li>
                                <li class="cuc">
                                    <a href="/">HaNoi University of science and technology</a>
                                </li>
                            </ul>
                            <ul class="text-modile">
                                <li class="dong">
                                    <a href="/">Đại học</a>
                                </li>
                                <li class="dong">
                                    <a href="/">bách khoa Hà Nội</a>
                                </li>
                                <li class="line">
                                    <a href="/">HaNoi University</a>
                                </li>
                                <li class="line">
                                    <a href="/">of science and technology</a>
                                </li>
                            </ul>

                        </div>
                        <h1 class="hidden">Hanoi University of Science and Technology &#40;HUST&#41;</h1>
                        <h2 class="hidden">Hanoi University of Science and Technology &#40;HUST&#41;</h2>
                    </div>
                    <div class="right-top">
                        <div class="menu_topright">
                            <ul>
                                <li>
                                    <a href="{{ route('web.contact') }}" title="Contact">Contact</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    {{-- <div class="rsearch">
                        <a href="#flisearchform" class="searchbtn"><i class="fa fa-search"></i></a>
                    </div> --}}

                    </div>
                    <button type="button" class="btn btn-toggle-mobile-menu" data-toggle="collapse"
                        data-target=".fli-header-mobilecontent">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu-items">
            <div>
                <ul class="menu-mobile">
                    <li {{ isCurrentPage('about') }}>
                        <div>
                            <a title="About HUST" href="{{ route('web.about') }}">About HUST</a>
                            <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                        </div>

                        <ul>
                            @foreach (getCategories(getConst('PARENT_CATEGORY1.About')) as $itemCategory)
                                <li>
                                    <div>
                                        <a title="{{ $itemCategory->name }}" href="{{ route('web.about-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                        @if ($itemCategory->subCategories->count() > 0)
                                        <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    @if ($itemCategory->subCategories->count() > 0)
                                    <ul>
                                        @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                        <li>
                                            <div>
                                                <a title="{{ $itemSubCategory->name }}"
                                                    href="{{ route('web.about-sub-category', [
                                                        'category' => $itemCategory->id,
                                                        'sub_category' => $itemSubCategory->id,
                                                        ]) }}">
                                                    {{ $itemSubCategory->name }}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{ isCurrentPage('academics') }}>
                        <div>
                            <a title="Academics" href="{{ route('web.academics') }}">Academics</a>
                            <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                        </div>
                        <ul>
                            @foreach (getCategories(getConst('PARENT_CATEGORY1.Academic')) as $itemCategory)
                                <li>
                                    <div>
                                        <a title="{{ $itemCategory->name }}" href="{{ route('web.academics-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                        @if ($itemCategory->subCategories->count() > 0)
                                        <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    @if ($itemCategory->subCategories->count() > 0)
                                    <ul>
                                        @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                        <li>
                                            <div>
                                                <a title="{{ $itemSubCategory->name }}"
                                                    href="{{ route('web.academics-sub-category', [
                                                        'category' => $itemCategory->id,
                                                        'sub_category' => $itemSubCategory->id,
                                                        ]) }}">
                                                    {{ $itemSubCategory->name }}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{ isCurrentPage('research') }}>
                        <div>
                            <a title="Research" href="{{ route('web.research') }}">Research</a>
                            <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                        </div>
                        <ul>
                            @foreach (getCategories(getConst('PARENT_CATEGORY1.Research')) as $itemCategory)
                                <li>
                                    <div>
                                        <a title="{{ $itemCategory->name }}" href="{{ route('web.research-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                        @if ($itemCategory->subCategories->count() > 0)
                                        <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    @if ($itemCategory->subCategories->count() > 0)
                                    <ul>
                                        @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                        <li>
                                            <div>
                                                <a title="{{ $itemSubCategory->name }}"
                                                    href="{{ route('web.research-sub-category', [
                                                        'category' => $itemCategory->id,
                                                        'sub_category' => $itemSubCategory->id,
                                                        ]) }}">
                                                    {{ $itemSubCategory->name }}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{ isCurrentPage('alumni') }}>
                        <div>
                            <a title="Alumni" href="{{ route('web.alumni') }}">Alumni</a>
                            <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                        </div>
                        <ul>
                            @foreach (getCategories(getConst('PARENT_CATEGORY1.Alumni')) as $itemCategory)
                                <li>
                                    <div>
                                        <a title="{{ $itemCategory->name }}" href="{{ route('web.alumni-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                        @if ($itemCategory->subCategories->count() > 0)
                                        <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    @if ($itemCategory->subCategories->count() > 0)
                                    <ul>
                                        @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                        <li>
                                            <div>
                                                <a title="{{ $itemSubCategory->name }}"
                                                    href="{{ route('web.alumni-sub-category', [
                                                        'category' => $itemCategory->id,
                                                        'sub_category' => $itemSubCategory->id,
                                                        ]) }}">
                                                    {{ $itemSubCategory->name }}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{ isCurrentPage('news') }}>
                        <div>
                            <a title="News" href="{{ route('web.news') }}">News</a>
                            <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                        </div>
                        <ul>
                            @foreach (getCategories(getConst('PARENT_CATEGORY1.News')) as $itemCategory)
                                <li>
                                    <div>
                                        <a title="{{ $itemCategory->name }}" href="{{ route('web.news-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                        @if ($itemCategory->subCategories->count() > 0)
                                        <i class="fa fa-angle-down custom-fa" aria-hidden="true"></i>
                                        @endif
                                    </div>
                                    @if ($itemCategory->subCategories->count() > 0)
                                    <ul>
                                        @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                        <li>
                                            <div>
                                                <a title="{{ $itemSubCategory->name }}"
                                                    href="{{ route('web.news-sub-category', [
                                                        'category' => $itemCategory->id,
                                                        'sub_category' => $itemSubCategory->id,
                                                        ]) }}">
                                                    {{ $itemSubCategory->name }}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="menu-mobile-bottom"></div>
        </div>
    </header>
    <div class="section-nav">
        <div class="wraper">
            <nav class="second-nav" id="menusite">
                <div class="container">
                    <div class="row">
                        <div class="">
                            <ul class="slimmenu">
                                <li>
                                    <a title="Home" href="/"><em
                                            class="fa fa-lg fa-home">&nbsp;</em> <span class="hidden-sm"> Home
                                        </span></a>
                                </li>
                                <li {{ isCurrentPage('about') }}>
                                    <a title="About HUST" href="{{ route('web.about') }}">About HUST</a>
                                    <ul>
                                        @foreach (getCategories(getConst('PARENT_CATEGORY1.About')) as $itemCategory)
                                            <li>
                                                <a title="{{ $itemCategory->name }}" href="{{ route('web.about-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                                @if ($itemCategory->subCategories->count() > 0)
                                                <ul>
                                                    @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                                    <li>
                                                        <a title="{{ $itemSubCategory->name }}"
                                                            href="{{ route('web.about-sub-category', [
                                                                'category' => $itemCategory->id,
                                                                'sub_category' => $itemSubCategory->id,
                                                            ]) }}">
                                                            {{ $itemSubCategory->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li {{ isCurrentPage('academics') }}>
                                    <a title="Academics" href="{{ route('web.academics') }}">Academics</a>
                                    <ul>
                                        @foreach (getCategories(getConst('PARENT_CATEGORY1.Academic')) as $itemCategory)
                                            <li>
                                                <a title="{{ $itemCategory->name }}" href="{{ route('web.academics-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                                @if ($itemCategory->subCategories->count() > 0)
                                                <ul>
                                                    @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                                    <li>
                                                        <a title="{{ $itemSubCategory->name }}"
                                                            href="{{ route('web.academics-sub-category', [
                                                                'category' => $itemCategory->id,
                                                                'sub_category' => $itemSubCategory->id,
                                                            ]) }}">
                                                            {{ $itemSubCategory->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li {{ isCurrentPage('research') }}>
                                    <a title="Research" href="{{ route('web.research') }}">Research</a>
                                    <ul>
                                        @foreach (getCategories(getConst('PARENT_CATEGORY1.Research')) as $itemCategory)
                                            <li>
                                                <a title="{{ $itemCategory->name }}" href="{{ route('web.research-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                                @if ($itemCategory->subCategories->count() > 0)
                                                <ul>
                                                    @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                                    <li>
                                                        <a title="{{ $itemSubCategory->name }}"
                                                            href="{{ route('web.research-sub-category', [
                                                                'category' => $itemCategory->id,
                                                                'sub_category' => $itemSubCategory->id,
                                                            ]) }}">
                                                            {{ $itemSubCategory->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li {{ isCurrentPage('alumni') }}>
                                    <a title="Alumni" href="{{ route('web.alumni') }}">Alumni</a>
                                    <ul>
                                        @foreach (getCategories(getConst('PARENT_CATEGORY1.Alumni')) as $itemCategory)
                                            <li>
                                                <a title="{{ $itemCategory->name }}" href="{{ route('web.alumni-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                                @if ($itemCategory->subCategories->count() > 0)
                                                <ul>
                                                    @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                                    <li>
                                                        <a title="{{ $itemSubCategory->name }}"
                                                            href="{{ route('web.alumni-sub-category', [
                                                                'category' => $itemCategory->id,
                                                                'sub_category' => $itemSubCategory->id,
                                                            ]) }}">
                                                            {{ $itemSubCategory->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li {{ isCurrentPage('news') }}>
                                    <a title="News" href="{{ route('web.news') }}">News</a>
                                    <ul>
                                        @foreach (getCategories(getConst('PARENT_CATEGORY1.News')) as $itemCategory)
                                            <li>
                                                <a title="{{ $itemCategory->name }}" href="{{ route('web.news-category', $itemCategory->id) }}">{{ $itemCategory->name }}</a>
                                                @if ($itemCategory->subCategories->count() > 0)
                                                <ul>
                                                    @foreach (getSubCategories($itemCategory->id) as $itemSubCategory)
                                                    <li>
                                                        <a title="{{ $itemSubCategory->name }}"
                                                            href="{{ route('web.news-sub-category', [
                                                                'category' => $itemCategory->id,
                                                                'sub_category' => $itemSubCategory->id,
                                                            ]) }}">
                                                            {{ $itemSubCategory->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
