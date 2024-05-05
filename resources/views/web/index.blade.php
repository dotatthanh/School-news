@extends('layouts.master-web')

@section('title')
    Hanoi University of Science and Technology (HUST)
@endsection

@section('content')
    <div class="section-body home-body">
        <div class="container">
            <div class="row">
                <div class="head-section">
                    <!-- Slides Container -->
                    <div class="lazy slider" data-sizes="50vw" id="lazySliderUniqueID">
                        <div>
                            <div class="div-poistion">
                                <a href="https://hust.edu.vn/en/banners/click/?id=9&amp;s=3e8c8d47e8da796c18e31b040e2b3d70"
                                    onclick="this.target='_blank'" title=""> <img alt=""
                                        src="https://hust.edu.vn/uploads/sys/banners/cover-tin-tuc_1.jpg" /></a>
                                <div>
                                    <h1 data-toggle="animatedItem" data-slideuq1="0" class="hidden"></h1>
                                    <p data-toggle="animatedItem" data-slideuq1="0" data-delay="1" class="hidden">Tuyển
                                        sinh</p>
                                </div>
                                <div class="slide-text custom-gradient-rtl animate__animated animate__slow">Tuyển sinh
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fixed_social">
                        <div id="socialList" class="content">
                            <ul class="socialList">
                                <li><a href="https://hust.edu.vn" target="_blank" class="social-red"><i
                                            class="custom-news"></i></a></li>
                                <li><a href="https://www.facebook.com/dhbkhanoi/?fref=ts" target="_blank"
                                        class="social-blue"><i class="fa fa-lg fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCl17km6Ou3av5LClGz_FWIw/featured"
                                        target="_blank" class="social-red2"><i class="fa fa-lg fa-youtube-play"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/school/dhbkhn/" target="_blank"
                                        class="social-blue2"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/hust_dhbkhanoi/" target="_blank"
                                        class="social-red3"><i class="fa fa-lg fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/DHBKHN_HUST" target="_blank" class="social-blue3"><i
                                            class="fa fa-lg fa-twitter"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <section>
                <div id="body">
                    <div class="im-flex-section-row">
                        <div class="wraper">
                            <div class="text-center block-title">
                                <h2>News</h2>
                            </div>
                            <div class="im-flex-main-news custom-block-news">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="featured-post">
                                            <div class="item">
                                                <div class="item-content">
                                                    <div class="height-news img-hover-zoom">
                                                        <a href="{{ route('web.news-detail',[
                                                            'category' => $newPost->category_id,
                                                            'sub_category' => $newPost->sub_category_id,
                                                            'news' => $newPost->id,
                                                        ]) }}" class="img">
                                                            <img
                                                                src="{{ asset($newPost->image) }}"
                                                                alt="{{ $newPost->title }}">
                                                        </a>
                                                    </div>
                                                    <div class="item-inner css-items">
                                                        <h3>
                                                            <a href="{{ route('web.news-detail',[
                                                            'category' => $newPost->category_id,
                                                            'sub_category' => $newPost->sub_category_id,
                                                            'news' => $newPost->id,
                                                        ]) }}" title="{{ $newPost->title }}">{{ $newPost->title }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="slider-post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="double-slider">
                                                        @foreach ($slidePost as $item)
                                                        <div class="item">
                                                            <div class="item-content">
                                                                <a href="{{ route('web.news-detail', [
                                                                    'category' => $item->category_id,
                                                                    'sub_category' => $item->sub_category_id,
                                                                    'news' => $item->id,
                                                                ]) }}"
                                                                    class="img"><img
                                                                        src="{{ asset($item->image) }}"
                                                                        alt="{{ $item->title }}"></a>
                                                                <div class="item-inner custom-gradient-bt">
                                                                    <h3>
                                                                        <a href="{{ route('web.news-detail', [
                                                                                'category' => $item->category_id,
                                                                                'sub_category' => $item->sub_category_id,
                                                                                'news' => $item->id,
                                                                            ]) }}"
                                                                            title="{{ $item->title }}">{{ $item->title }}
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="non-slider">
                                                        @foreach ($nonPost as $item)
                                                        <div class="item">
                                                            <div class="item-content">
                                                                <div class="item-inner">
                                                                    <h3>
                                                                        <a href="{{ route('web.news-detail', [
                                                                                'category' => $item->category_id,
                                                                                'sub_category' => $item->sub_category_id,
                                                                                'news' => $item->id,
                                                                            ]) }}"
                                                                            title="{{ $item->title }}">{{ $item->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="im-flex-main-news-btn text-center">
                                <a href="{{ route('web.news') }}" class="btn btn-lg btn-custom-red">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="wraper">
                        <div class="row">
                            <div class="col">
                                <!-- Slides Container -->
                                <div class="banner_home">
                                    <h2 class="text-center css-h2-banner"><span>Research</span></h2>
                                    <div>
                                        <div class="width-image" style="margin: auto;">
                                            <div class="backgroup-up"></div>
                                            <img alt=""
                                                src="https://hust.edu.vn/uploads/sys/banners/nghien-cuu_1.jpg" />
                                            <div class="color-text">
                                                <ul dir="ltr">
                                                    @foreach ($categoryResearchs as $item)
                                                    <li data-placeholder="Bản dịch">
                                                        <a href="{{ route('web.research-category', $item->id) }}">{{ $item->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-24 col-sm-12">
                                <div class="section-home-intro">
                                    <div class="text-center">
                                        <h2><a href="{{ route('web.academics') }}" title="Academics">Academics</a></h2>
                                    </div>
                                    <div class="height-home img-hover-zoom">
                                        <a href="{{ route('web.academics') }}" title="Academics"><img alt=""
                                                src="{{ asset('web/uploads/dao-tao-home.jpg') }}"></a>
                                    </div>
                                    <div class="section-home-intro-inner">
                                        <h3>Information about models and training programs of undergraduate and graduate
                                            training systems of Hanoi University of Science and Technology</h3>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-xs-24 col-sm-12">
                                <div class="section-home-intro">
                                    <div class="text-center">
                                        <h2><a href="{{ route('web.alumni') }}" title="Alumni">Alumni</a></h2>
                                    </div>
                                    <div class="height-home img-hover-zoom">
                                        <a href="{{ route('web.alumni') }}" title="Alumni"><img alt=""
                                                src="{{ asset('web/uploads/cuu-sinh-vien-home.jpg') }}"></a>
                                    </div>
                                    <div class="section-home-intro-inner">
                                        <h3>To connect generations of alumni for sharing, cooperation, mutual support
                                            and development, and to uphold BACH KHOA’s traditional values,</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
