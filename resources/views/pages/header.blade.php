<div class="wapper">
    <div class="container">
        <!-- header -->
        <header>
            <div class="navbar">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('image/logo.jpg')}}" alt="">
                    </a>
                </div>
                <div class="navbar_mb cursor">
                    <div class="icon_bar"><i class="fa-solid fa-bars-staggered"></i></div>
                </div>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="{{url('/')}}" class="menu-link"><span class="icon_menu"><i
                                    class="fa-solid fa-house"></i></span>trang chủ</a>

                    </li>
                    <li class="menu-item">

                        <a href="{{url('gioi-thieu')}}" class="menu-link"><span class="icon_menu"><i
                                    class="fa-solid fa-file-signature"></i></span>giới thiệu</a>

                    </li>
                    <li class="menu-item">
                        <a href="{{url('nha-tuyen-dung')}}" class="menu-link"><span class="icon_menu"><i
                                    class="fa-solid fa-user-plus"></i></span>nhà tuyển dụng</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('tin-tuc')}}" class="menu-link"><span class="icon_menu"><i
                                    class="fa-solid fa-radio"></i></span>tin tức</a>
                    </li>
                    
    @if (Auth::check())
        
    <li class="menu-item">
        <a href="{{url('log_out')}}" class="menu-link"><span class="icon_menu"><i
            class="fa-solid fa-unlock"></i></span><span>đăng xuất</span></a>
    </li>
    @endif
        
      
                </ul>
                <form action="{{route('tim-kiem.index')}}" method="get" class="navbar_search">
                    <input type="text" name="keyword" class="input_search btn-none"
                        placeholder="Nhập để tìm kiếm" autocomplete="off">
                    <div class="icon_search">
                        <button type="submit" class="btn_search btn-none"><i
                                class="fa-solid fa-magnifying-glass cursor"></i></button>
                </form>

            </div>
        </header>
        <!-- end---header -->
    </div>
    <div class="overlay_mb none">
        <div class="close cursor"><i class="fa-regular fa-circle-xmark"></i></div>
    </div>
    <ul class="menu_mb">
        <div class="logo margin">
            <a href="{{url('/')}}">
                <img src="{{asset('image/logo.jpg')}}" alt="">
            </a>
        </div>
        <div class="item_search">
            <form action="{{route('tim-kiem.index')}}" method="get" class="navbar_search form_search_mb"
                style="display: flex;justify-content: space-between;">
                <input style="flex: 1;" type="text" name="keyword" class="input_search btn-none"
                    placeholder="Nhập để tìm kiếm" autocomplete="off">
                <div class="icon_search">
                    <button type="submit" class="btn_search btn-none"><i
                            class="fa-solid fa-magnifying-glass cursor"></i></button>
            </form>
        </div>
        <li class="menu_list_mb">
            <a href="{{url('/')}}" class="menu_link_mb"><span class="icon_menu"><i
                        class="fa-solid fa-house"></i></span>TRANG CHỦ</a>
        </li>
        <li class="menu_list_mb">
            <a href="{{url('gioi-thieu')}}" class="menu_link_mb"><span class="icon_menu"><i
                        class="fa-solid fa-file-signature"></i></span>GIỚI
                THIỆU</a>
        </li>
        <li class="menu_list_mb">
            <a href="{{url('nha-tuyen-dung')}}" class="menu_link_mb"><span class="icon_menu"><i
                        class="fa-solid fa-user-plus"></i></span>NHÀ TUYỂN
                DỤNG</a>
        </li>
        <li class="menu_list_mb">
            <a href="{{url('tin-tuc')}}" class="menu_link_mb"><span class="icon_menu"><i
                        class="fa-solid fa-radio"></i></span>TIN TỨC</a>
        </li>
        @if (Auth::check())
            
        <li class="menu_list_mb">
            <a class="menu_link_mb"><span class="icon_menu"><i
                        class="fa-solid fa-right-from-bracket"></i></span>Xin chào
                {{Auth::user()->name}}</a>
        </li>
        @endif
        <li class="menu_list_mb">
            <a href="{{url('log_out')}}" class="menu_link_mb">ĐĂNG XUẤT</a>
        </li>
        </li>
    </ul>
</div>