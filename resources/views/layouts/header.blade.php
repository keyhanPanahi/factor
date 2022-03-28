<!-- Header Section Start -->
<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">

            <!-- Header Logo (Header Left) Start -->
            <div class="header-logo col-auto">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                    <img src="{{ asset('assets/images/logo/logo-light.png') }}" class="logo-light" alt="">
                </a>
            </div><!-- Header Logo (Header Left) End -->

            <!-- Header Right Start -->
            <div class="header-right flex-grow-1 col-auto">
                <div class="row justify-content-between align-items-center">

                    <!-- Side Header Toggle & Search Start -->
                    <div class="col-auto">
                        <div class="row align-items-center">

                            <!--Side Header Toggle-->
                            <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                            <!--Header Search-->
                            <div class="col-auto">

                                <div class="header-search">

                                    <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" placeholder="جستجو کنید">
                                            <button><i class="zmdi zmdi-search"></i></button>
                                        </form>
                                        <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div><!-- Side Header Toggle & Search End -->

                    <!-- Header Notifications Area Start -->
                    <div class="col-auto">

                        <ul class="header-notification-area">

                            <!--Language-->
                            <li class="adomx-dropdown position-relative col-auto">
                                <a class="toggle" href="#"><img class="lang-flag" src="{{ asset('assets/images/flags/flag-1.jpg') }}" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                <!-- Dropdown -->
                                <ul class="adomx-dropdown-menu dropdown-menu-language">
                                    <li><a href="#"><img src="{{ asset('assets/images/flags/flag-1.jpg') }}" alt=""> ایرانی</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/flags/flag-2.jpg') }}" alt=""> انگلیسی</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/flags/flag-3.jpg') }}" alt=""> اسپانیایی </a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/flags/flag-4.jpg') }}" alt=""> آلمانی</a></li>
                                </ul>

                            </li>

                            <!--Mail-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-mail">
                                    <div class="head">
                                        <h4 class="title">شما 3 ایمیل دارید.</h4>
                                    </div>
                                    <div class="body custom-scroll">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="image"><img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                    <div class="content">
                                                        <h6>زیر: اکانت جدید</h6>
                                                        <p>تغییرات زیادی در قسمت هایی از آدومکس وجود دارد. </p>
                                                    </div>
                                                    <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="image"><img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                    <div class="content">
                                                        <h6>زیر: ایمیل پشتیبانی</h6>
                                                        <p>تغییرات زیادی در قسمت هایی از آدومکس وجود دارد. </p>
                                                    </div>
                                                    <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="image"><img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                    <div class="content">
                                                        <h6>زیر: درخواست کالا</h6>
                                                        <p>تغییرات زیادی در قسمت هایی از آدومکس وجود دارد. </p>
                                                    </div>
                                                    <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="image"><img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                    <div class="content">
                                                        <h6>زیر: ایمیل پشتیبانی</h6>
                                                        <p>تغییرات زیادی در قسمت هایی از آدومکس وجود دارد. </p>
                                                    </div>
                                                    <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <!--Notification-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                    <div class="head">
                                        <h5 class="title">شما 4 اعلان جدید دارید.</h5>
                                    </div>
                                    <div class="body custom-scroll">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-notifications-none"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-block"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-info-outline"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-shield-security"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-notifications-none"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-block"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-info-outline"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="zmdi zmdi-shield-security"></i>
                                                    <p>تغییرات زیادی در صفحات وجود دارد.</p>
                                                    <span>قبل ظهر 11:00   امروز</span>
                                                </a>
                                                <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer">
                                        <a href="#" class="view-all">مشاهده همه</a>
                                    </div>
                                </div>

                            </li>

                            <!--User-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">طاهر نصیری</span>
                                            </span>
                                </a>

                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-user">
                                    <div class="head">
                                        <h5 class="name"><a href="#">طاهر نصیری</a></h5>
                                        <a class="mail" href="#">mailnam@mail.com</a>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-account"></i>پروفایل</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-email-open"></i>صندوق ورودی</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>فعالیت</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-settings"></i>تنظیمات</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-lock-open"></i>خروج</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-paypal"></i>پرداخت ها</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-pages"></i>صورتحساب</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div><!-- Header Notifications Area End -->

                </div>
            </div><!-- Header Right End -->

        </div>
    </div>
</div><!-- Header Section End -->
