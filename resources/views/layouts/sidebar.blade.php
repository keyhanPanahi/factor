<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                {{--<li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>داشبورد</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>تجارت الکترونیکی (پیش فرض)</span></a></li>
                        <li><a href="#"><span>کریپتوکارنسی</span></a></li>
                    </ul>
                </li>--}}
                <li><a href="{{ route('home') }}"><i class="ti-home"></i> <span>داشبورد</span></a></li>
                <li><a href="{{ route('user.index') }}"><i class="ti-user"></i> <span>کاربران</span></a></li>
                <li><a href="#"><i class="ti-palette"></i> <span>ابزارک ها</span></a></li>
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>عناصر پایه</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>هشدار ها</span></a></li>
                        <li><a href="#"><span>آکاردئون ها</span></a></li>
                        <li><a href="#"><span>آواتار</span></a></li>
                        <li><a href="#"><span>نشانک ها</span></a></li>
                        <li><a href="#"><span>دکمه ها</span></a></li>
                        <li><a href="#"><span>کرسول</span></a></li>
                        <li><a href="#"><span>افت کشیدن</span></a></li>
                        <li><a href="#"><span>فهرست گروه</span></a></li>
                        <li><a href="#"><span>رسانه ها</span></a></li>
                        <li><a href="#"><span>مودال</span></a></li>
                        <li><a href="#"><span>صفحه بندی</span></a></li>
                        <li><a href="#"><span>نوار پیشرفت</span></a></li>
                        <li><a href="#"><span>اسپینرها</span></a></li>
                        <li><a href="#"><span>زبانه ها</span></a></li>
                        <li><a href="#"><span>راهنمایی</span></a></li>
                        <li><a href="#"><span>تایپوگرافی</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-crown"></i> <span>عناصر پیشرفته</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>کلیپ بورد</span></a></li>
                        <li><a href="#"><span>تقویم کامل</span></a></li>
                        <li><a href="#"><span>پخش رسانه ای</span></a></li>
                        <li><a href="#"><span>قابل مرتب شدن (درگ و دراپ)</span></a></li>
                        <li><a href="#"><span>توستر</span></a></li>
                        <li><a href="#"><span>رتبه بندی</span></a></li>
                        <li><a href="#"><span>هشدار خوب</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-stamp"></i> <span>آیکن ها</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>کریپتوکارنسی</span></a></li>
                        <li><a href="#"><span>فونت عالی</span></a></li>
                        <li><a href="#"><span>آیکن متریال</span></a></li>
                        <li><a href="#"><span>Themify آیکون</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-notepad"></i> <span>فرم ها</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>عناصر پایه</span></a></li>
                        <li><a href="#"><span>جعبه</span></a></li>
                        <li><a href="#"><span>تاریخ و ماسک</span></a></li>
                        <li><a href="#"><span>ویرایشگر</span></a></li>
                        <li><a href="#"><span>آپلود فایل</span></a></li>
                        <li><a href="#"><span>طرح بندی</span></a></li>
                        <li><a href="#"><span>رادیو</span></a></li>
                        <li><a href="#"><span>اسلایدر محدوده</span></a></li>
                        <li><a href="#"><span>انتخاب ها</span></a></li>
                        <li><a href="#"><span>سوئیچرها</span></a></li>
                        <li><a href="#"><span>ویزارد</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-layout"></i> <span>جداول</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>پایه</span></a></li>
                        <li><a href="#"><span>جدول داده ها</span></a></li>
                        <li><a href="#"><span>تصویر زمینه</span></a></li>
                        <li><a href="#"><span>جسیجید</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-pie-chart"></i> <span>نمودار</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>نمودار جی</span></a></li>
                        <li><a href="#"><span>نمودار جی 2</span></a></li>
                        <li><a href="#"><span>نمودار گوگل</span></a></li>
                        <li><a href="#"><span>نمودار مورریس</span></a></li>
                        <li><a href="#"><span>نمودار جزییات</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-map"></i> <span>نقشه ها</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>نقشه برداری</span></a></li>
                        <li><a href="#"><span>نقشه گوگل</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>تجارت الکترونیکی</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>افزودن محصول</span></a></li>
                        <li><a href="#"><span>ویرایش محصول</span></a></li>
                        <li><a href="#"><span>فهرست صورتحساب</span></a></li>
                        <li><a href="#"><span>جزییات صورتحساب</span></a></li>
                        <li><a href="#"><span>فهرست سفارشات</span></a></li>
                        <li><a href="#"><span>جزییات سفارشات</span></a></li>
                        <li><a href="#"><span>مدیریت محصولات</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-gift"></i> <span>برنامه ها</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>چت</span></a></li>
                        <li><a href="#"><span>میل</span></a></li>
                        <li><a href="#"><span>تک میل</span></a></li>
                        <li><a href="#"><span>لیست های کاری</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-lock"></i> <span>احراز هویت</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>ورود</span></a></li>
                        <li><a href="#"><span>ثبت نام</span></a></li>
                        <li><a href="#"><span>پروفایل</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-layers"></i> <span>صفحات</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="#"><span>خالی</span></a></li>
                        <li><a href="#"><span>گاهشمار</span></a></li>
                        <li><a href="#"><span>قیمت</span></a></li>
                        <li><a href="#"><span>خطای-1</span></a></li>
                        <li><a href="#"><span>خطای-2</span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->
