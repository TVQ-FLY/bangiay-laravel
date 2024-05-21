@extends('layouts.app_master_frontend')

@section('css')
    @php
        $display_menu = config('layouts.component.cate.home.display');
//    @endphp
    <style>
        <?php $style = file_get_contents('css/home_insights.min.css');echo $style;?>
        #menu-main {
            display: '{{ $display_menu }}';
        }
    </style>
@stop

@section('content')

    <div class="component-slide">
        @if (config('layouts.pages.home.slide.with') == 'full')
            <div id="content-slide">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        @else
            <div class="container" style="display: flex">
                <div class="left" style="width: 250px">

                </div>
                <div class="right" style=" width: calc(100% - 250px);">
                    <div id="content-slide">
                        <div class="spinner">
                            <div class="rect1"></div>
                            <div class="rect2"></div>
                            <div class="rect3"></div>
                            <div class="rect4"></div>
                            <div class="rect5"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="container" id="before-slide">
        {{-- <div class="logo-partner">
            @for($i = 0; $i < 6; $i++)
                <div class="item">
                    <a href="#" title="Đồng hồ Atlantic Swiss">
                        <img class="lazyload" src="C:/Users/VINHTECH/Pictures/logo.png" data-src="" alt="Atlantic Swiss" />
                    </a>
                </div>
            @endfor
        </div> --}}
        <div class="product-one">
            <div class="top">
                <a href="#" title="" class="main-title">SẢN PHẨM BÁN CHẠY</a>
            </div>
            <div class="bot">
{{--                @for($i = 1 ; $i <= 5; $i ++)--}}
{{--                    <div></div>--}}
{{--                @endfor--}}
                @if ($event1)
                <div class="left">
                    <div class="image">
                        <a href="{{  $event1->e_link }}" title="" class="{{ $event1->e_name }}" target="_blank">
                            <img style="height: 310px;" class="lazyload lazy" alt="{{ $event1->e_name }}" src="{{  asset('images/preloader.gif') }}"  data-src="{{  pare_url_file($event1->e_banner) }}" />
                        </a>
                    </div>
                </div>
                @endif
                <div class="right js-product-one owl-carousel owl-theme owl-custom">
                    @foreach($productsPay as $product)
                        <div class="item">
                            @include('frontend.components.product_item',[ 'product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if ($event2)
            @include('frontend.pages.home.include._inc_flash_sale')
        @endif

        {{-- <div class="product-two">
            <div class="top">
            </div>
            <div class="bot">
                @for($i=0; $i < 4; $i++)
                    <div class="item">
                        @include('frontend.components.product_item')
                    </div>
                @endfor
            </div>
        </div> --}}

        <div class="product-three">
            <div class="top">
                <a href="#" title="" class="main-title">SẢN PHẨM MỚI</a>
            </div>
            <div class="bot">
                <div class="left">
                    <div class="image">
                        @if (isset($event3->e_link))
                            <a href="{{  $event3->e_link }}" title="" class="{{ $event3->e_name }}" target="_blank">
                                <img style="height: 310px;" class="lazyload lazy" alt="{{ $event3->e_name }}" src="{{  asset('images/preloader.gif') }}"  data-src="{{  pare_url_file($event3->e_banner) }}" />
                            </a>
                        @endif
                    </div>
                </div>
                <div class="right js-product-one owl-carousel owl-theme owl-custom">
                    @if (isset($productsNew))
                        @foreach($productsNew as $product)
                            <div class="item">
                                @include('frontend.components.product_item',['product' => $product])
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="product-two">
            <div class="top">
                <a href="#" class="main-title">SẢN PHẨM NỔI BẬT</a>
            </div>
            <div class="bot">
                @if (isset($productsHot))
                    @foreach($productsHot as $product)
                        <div class="item">
                            @include('frontend.components.product_item',['product' => $product])
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-two" id="product-recently"></div>
        <div id="product-by-category"></div>
        @include('frontend.pages.home.include._inc_article')
    </div>
@stop

@section('script')
    <script type="text/javascript">
        var routeRenderProductRecently  = '{{ route('ajax_get.product_recently') }}';
       
        var routeRenderSlide  = '{{ route('ajax_get.slide') }}';
        var CSS = "{{ asset('css/home.min.css') }}";
		<?php $js = file_get_contents('js/home.js');echo $js;?>
    </script>
@stop
