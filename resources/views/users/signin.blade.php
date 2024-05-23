<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                        Vào cửa hàng trên ứng dụng GenZ Store
                        <!-- Header qr code -->
                        <div class="header__qr">
                            <img src="{{ asset('assets/img/qr_code.png') }}" alt="QR code" class="header__qr-img">
                            <div class="header__qr-apps">
                                <a href="#" class="header__qr-link">
                                    <img src="{{ asset('assets/img/google_play.png') }}" alt="Google Play" class="header__qr-download-img">
                                </a>
                                <a href="#" class="header__qr-link">
                                    <img src="{{ asset('assets/img/app_store.png') }}" alt="App Store" class="header__qr-download-img">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-title--no-pointer">Kết nối</span>
                        <a href="https://www.facebook.com/finn.264/" class="header__navbar-icon-link">
                            <i class="header__navbar--icon fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/im.vulinh__/" class="header__navbar-icon-link">
                            <i class="header__navbar--icon fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-notify">
                        <a href="#" class="header__navbar-item-link">
                            <i class="header__navbar-icon far fa-bell"></i>
                            Thông báo
                        </a>
                        <div class="header__notify">
                            <header class="header__notify-header">
                                <h3>Thông báo mới nhận</h3>
                            </header>
                            <ul class="header__notify-list">
                                <li class="header__notify-item header__notify-item--viewed">
                                    <a href="#" class="header__notify-link">
                                        <img src="https://cf.shopee.vn/file/d10b37e9760f46a24e0c172bd85ec83d" alt="" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name"> Áo Thun Tay Ngắn Màu Trơn Thời Trang Xuân Hè Dễ Phối Đồ Cho Nam</span>
                                            <span class="header__notify-description">Áo thun Nam Local Brand Chính Hãng </span>
                                        </div>
                                    </a>
                                </li>

                                <li class="header__notify-item header__notify-item--viewed">
                                    <a href="#" class="header__notify-link">
                                        <img src="https://cf.shopee.vn/file/b000cb839bc942e82c6f8b626a2aa26b" alt="" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name"> Áo Sơ Mi Tay Ngắn Màu Trơn </span>
                                            <span class="header__notify-description">Phong Cách Nhật Bản Thời Trang Mùa Hè Cho Nam</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="header__notify-item header__notify-item--viewed">
                                    <a href="#" class="header__notify-link">
                                        <img src="https://cf.shopee.vn/file/2f13f79c90ee1712cdd19a5bb26f3790" alt="" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name"> Áo Khoác Dù Form Rộng Unisex Thêu Cao Cấp</span>
                                            <span class="header__notify-description"> Áo Khoác Nam Nữ Local Brand Chính Hãng Cinder Jacket Enjoy, hợp thời trang hiện đại</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="header__notify-item header__notify-item--viewed">
                                    <a href="#" class="header__notify-link">
                                        <img src="https://cf.shopee.vn/file/sg-11134201-23020-hgxz41shdhnve0" alt="" class="header__notify-img">
                                        <div class="header__notify-info">
                                            <span class="header__notify-name">Áo thun Nam tay lỡ họa tiết in Bullet mềm mại </span>
                                            <span class="header__notify-description">by Lallee.Design Áo phông dáng đứng chất vải Cotton dày dặn</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer class="header__notify-footer">
                                <a href="#" class="header__notify-footer-btn">Xem tất cả</a>
                            </footer>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <a href="#" class="header__navbar-item-link">
                            <i class="header__navbar-icon fa-regular fa-circle-question"></i>
                            Trợ giúp
                        </a>
                    </li>
                    <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">
                        <a href="{{ route('users.signup') }}" class="header__navbar-item-link">
                            Đăng ký
                        </a>
                    </li>
                    <li class="header__navbar-item header__navbar-item--strong">
                        <a href="{{ route('users.signin') }}" class="header__navbar-item-link">
                            Đăng nhập
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Header with search -->
            <div class="header-with-search">
                <div class="header__logo-img" id="header__logo-out">
                    <a href="{{route('guest.home')}}" class="header__logo-link">
                        <i class="fa-brands fa-shopify fa-2xl" style="color: #74C0FC; font-size: 3em;"></i>
                        <svg class="header__logo-img" viewBox="0 0 200 50">
                            <text x="12" y="40" font-family="Arial, sans-serif" font-size="36" fill="#74C0FC">GenZ Store</text>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <!-- content -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- Đăng nhập -->
            <form method="post" action="{{ route('users.signin') }}" class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <a href="/signup" class="auth-form__switch-btn">Đăng ký</a>
                    </div>
                    <div class="auth-form__form">
                        @csrf
                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ Session::get('error') }}</li>
                            </ul>
                            <button class="close" onclick="closeAlert()">&times;</button>
                        </div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            <button class="close" onclick="closeAlert()">&times;</button>
                        </div>
                        @endif
                        <div class="auth-form__group">
                            <input type="email" name="email" class="auth-form__input" placeholder="Email">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="{{ route('users.forgot_password') }}" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>

                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với FaceBook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title auth-form__socials-title--google">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>