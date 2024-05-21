<section class="top-header desktop">
    <div class="container">
        <div class="content">
            <div class="left">
                <a href="{{ route('get.static.customer_care') }}" title="Chăm sóc khách hàng" rel="nofollow">Chăm sóc khách hàng</a>
                 <a href="{{ route('get.user.transaction') }}" title="Kiểm tra đơn hàng" rel="nofollow">Kiểm tra đơn hàng</a>
            </div>
            <div class="right">
                @if (Auth::check())
                    <a href="{{  route('get.user.dashboard') }}">Xin chào {{ Auth::user()->name }}</a>
                    <a href="{{  route('get.user.dashboard') }}">Quản lý tài khoản</a>
                    <a href="{{  route('get.logout') }}">Đăng xuất </a>
                @else
                    <a href="{{  route('get.register') }}">Đăng ký</a>
                    <a href="{{  route('get.login') }}">Đăng nhập</a>
                @endif
             </div>
        </div>
    </div>
</section>
<section class="top-header mobile">
    <div class="container">
        <div class="content">
            <div class="left">
                <a href="{{ route('get.static.customer_care') }}" title="Chăm sóc khách hàng" rel="nofollow">Chăm sóc khách hàng</a>
                <a href="{{ route('get.user.transaction') }}" title="Kiểm tra đơn hàng" rel="nofollow">Kiểm tra đơn hàng</a>
                @if (Auth::check())
                    <a href="">Xin chào {{ Auth::user()->name }}</a>
                    <a href="{{  route('get.user.dashboard') }}">Quản lý tài khoản</a>
                    <a href="{{  route('get.logout') }}">Đăng xuất </a>
                @else
                    <a href="{{  route('get.register') }}">Đăng ký</a>
                    <a href="{{  route('get.login') }}">Đăng nhập</a>
                @endif
            </div>
        </div>
    </div>
</section>

<div class="commonTop">
    <div id="headers">
        <div class="container header-wrapper">
            <!--Thay đổi-->
            <div class="logo">
                <a href="/" class="desktop">
                    <img src="{{ url('images/logo3.png') }}" style="height: 70px; width: 80px" alt="Home">
                </a>

                <span  style="margin-left:25px; margin-top:12px" class="menu js-menu-cate"><svg style="width: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                </span>
            </div>
            <div class="search">

                <form action="{{ $link_search ?? route('get.product.list',['k' => Request::get('k')]) }}" role="search" method="GET">
                    <input type="text" name="k" value="{{ Request::get('k') }}" class="form-control" placeholder="Tìm kiếm sản phẩm ...">
                    <button type="submit" class="btnSearch">
                        <i class="fa fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
                </form>
            </div>
            <ul class="right">
                <li>
                    <a href="{{ route('get.shopping.list') }}" title="Giỏ hàng">
                        <svg style="width: 22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg> 
                        <span class="text">
                            <span class="">Giỏ hàng ({{ \Cart::count() }})</span>
                            <span></span>
                        </span>
                    </a>
                </li>
                <li class="desktop">
                    <a href="tel:18006005" title="">
                        <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        <span class="text">
                            <span class="">Hotline</span>
                            <span>1800.6005</span>
                        </span>
                    </a>
                </li>
            </ul>


            <div id="menu-main" class="container" style="display: none;">
                <ul class="menu-list">
                    @foreach($categories as $item)
                    <li>
                        <a href="{{  route('get.category.list', $item->c_slug.'-'.$item->id) }}"
                           title="{{  $item->c_name }}" class="js-open-menu">
                            <img src="{{ pare_url_file($item->c_avatar) }}" alt="{{ $item->c_name }}">
                            <span>{{  $item->c_name }}</span>
                            @if (isset($item->children) && count($item->children))
                                <span class="fa fa-angle-right"></span>
                            @else
                                <span></span>
                            @endif
                        </a>
                        @if (isset($item->children) && count($item->children))
                        <div class="submenu">
                            <div class="group">
                                <div class="item">
                                    @foreach($item->children as $children)
                                        <a href="{{  route('get.category.list', $children->c_slug.'-'.$children->id) }}"
                                           title="{{  $children->c_name }}" class="js-open-menu">
                                            <span>{{  $children->c_name }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
