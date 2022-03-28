@extends('layouts.master')

@section('head-tag')
<title>داشبورد</title>
@endsection

@section('content')

<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>داشبورد <span></span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-date-range">
                <input type="text" class="form-control input-date-predefined">
            </div>
        </div><!-- Page Button Group End -->

    </div><!-- Page Headings End -->

    <!-- Top Report Wrap Start -->
    <div class="row">
        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>مجموع بازدید کننده</h4>
                    <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>امروزه</h5>
                    <h2>100,560.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 92%;"></div>
                    </div>
                    <p>92٪ از بازدید کننده منحصر به فرد</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>محصولات فروخته شده</h4>
                    <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>امروزه</h5>
                    <h2>85,000.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 98%;"></div>
                    </div>
                    <p>98٪ بازدید کننده منحصر به فرد</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>سفارش دریافت شد</h4>
                    <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>امروزه</h5>
                    <h2>5,000.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 88%;"></div>
                    </div>
                    <p>88٪ از بازدید کننده منحصر به فرد</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>درآمد کل</h4>
                    <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>امروزه</h5>
                    <h2>3,000,000.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 76%;"></div>
                    </div>
                    <p>76٪ از بازدید کننده منحصر به فرد</p>
                </div>

            </div>
        </div><!-- Top Report End -->
    </div><!-- Top Report Wrap End -->

    <div class="row mbn-30">

        <!-- Revenue Statistics Chart Start -->
        <div class="col-md-8 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">آمار درآمد</h4>
                </div>
                <div class="box-body">
                    <div class="chart-legends-1 row">
                        <div class="chart-legend-1 col-12 col-sm-4">
                            <h5 class="title">کل فروش</h5>
                            <h3 class="value text-secondary">5000,000 تومان</h3>
                        </div>
                        <div class="chart-legend-1 col-12 col-sm-4">
                            <h5 class="title">مجموع مشاهده</h5>
                            <h3 class="value text-primary">10000,000</h3>
                        </div>
                        <div class="chart-legend-1 col-12 col-sm-4">
                            <h5 class="title">پشتیبانی کامل</h5>
                            <h3 class="value text-warning">100,000</h3>
                        </div>
                    </div>
                    <div class="chartjs-revenue-statistics-chart">
                        <canvas id="chartjs-revenue-statistics-chart"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Revenue Statistics Chart End -->

        <!-- Market Trends Chart Start -->
        <div class="col-md-4 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">روند بازار</h4>
                </div>
                <div class="box-body">
                    <div class="chartjs-market-trends-chart">
                        <canvas id="chartjs-market-trends-chart"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Market Trends Chart End -->

        <!-- Recent Transaction Start -->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">معامله اخیر</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle table-selectable">

                            <!-- Table Head Start -->
                            <thead>
                            <tr>
                                <th class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th>
                                <!--<th class="selector h5"><button class="button-check"></button></th>-->
                                <th><span>تصویر</span></th>
                                <th><span>نام محصول</span></th>
                                <th><span>شناسه</span></th>
                                <th><span>تعداد</span></th>
                                <th><span>قیمت</span></th>
                                <th><span>وضعبت</span></th>
                                <th></th>
                            </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                            <tr>
                                <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                <td><img src="assets/images/product/list-product-1.jpg" alt="" class="table-product-image rounded-circle"></td>
                                <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                                <td>#MSP40022</td>
                                <td>05 - محصولات</td>
                                <td>60000000.00 تومان</td>
                                <td><span class="badge badge-success">پرداخت شده</span></td>
                                <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                            </tr>
                            <tr class="selected">
                                <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                <td><img src="assets/images/product/list-product-2.jpg" alt="" class="table-product-image rounded-circle"></td>
                                <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                                <td>#MSP40022</td>
                                <td>05 - محصولات</td>
                                <td>60000000.00 تومان</td>
                                <td><span class="badge badge-success">پرداخت شده</span></td>
                                <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                            </tr>
                            <tr>
                                <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                <td><img src="assets/images/product/list-product-3.jpg" alt="" class="table-product-image rounded-circle"></td>
                                <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                                <td>#MSP40022</td>
                                <td>05 - محصولات</td>
                                <td>60000000.00 تومان</td>
                                <td><span class="badge badge-warning">مشکل دار</span></td>
                                <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                            </tr>
                            <tr>
                                <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                <td><img src="assets/images/product/list-product-4.jpg" alt="" class="table-product-image rounded-circle"></td>
                                <td><a href="#">مایکروسافت سطح حرفه ای 4</a></td>
                                <td>#MSP40022</td>
                                <td>05 - محصولات</td>
                                <td>60000000.00 تومان</td>
                                <td><span class="badge badge-danger">رد</span></td>
                                <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                            </tr>
                            </tbody><!-- Table Body End -->

                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Recent Transaction End -->

        <!-- Daily Sale Report Start -->
        <div class="col-xlg-4 col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">گزارش فروش روزانه</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table daily-sale-report">

                            <!-- Table Head Start -->
                            <thead>
                            <tr>
                                <th>مشتری</th>
                                <th>جزئیات</th>
                                <th>پرداخت</th>
                            </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                            <tr>
                                <td class="fw-600">جعفر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-success d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            <tr>
                                <td class="fw-600">جعفر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-success d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            <tr>
                                <td class="fw-600">جعفر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-danger d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            <tr>
                                <td class="fw-600">طاهر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-success d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            <tr>
                                <td class="fw-600">طاهر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-warning d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            <tr>
                                <td class="fw-600">طاهر</td>
                                <td>
                                    <p>بهترین راه برای موفقیت <br>همین است که دارید مشاهدش میکنید.</p>
                                </td>
                                <td><span class="text-success d-flex justify-content-between fw-600">500.00 تومان<span class="tippy" data-tippy-content="بهترین راه برای موفقیت <br/> همین است که دارید مشاهدش میکنید."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                            </tr>
                            </tbody><!-- Table Body End -->

                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Daily Sale Report End -->

        <!-- To Do List Start -->
        <div class="col-xlg-4 col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">فهرست کاری</h4>
                </div>
                <div class="box-body p-0">

                    <!--Todo List Start-->
                    <ul class="todo-list">

                        <!--Todo Item Start-->
                        <li class="done">
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li>
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li>
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li>
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li class="done">
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li>
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                        <!--Todo Item Start-->
                        <li>
                            <div class="list-action">
                                <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                            <div class="list-content">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                            </div>
                            <div class="list-action right">
                                <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </li>
                        <!--Todo Item End-->

                    </ul>
                    <!--Todo List End-->

                    <!--Add Todo List Start-->
                    <form action="#" class="todo-list-add-new" data-date="false">
                        <label class="status"><input type="checkbox"><i class="icon zmdi zmdi-star-outline"></i></label>
                        <input class="content" type="text" placeholder="Type new Task">
                        <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                    </form>
                    <!--Add Todo List End-->

                </div>
            </div>
        </div><!-- To Do List End -->

        <!-- Chat Start -->
        <div class="col-xlg-4 col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">چت های اخیر</h4>
                </div>
                <div class="box-body">

                    <div class="widget-chat-wrap custom-scroll">
                        <ul class="widget-chat-list">
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>جعفر عباسی</h5>
                                        <span>دیروز 5:30 بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-1.jpg" alt=""></div>
                                        <div class="content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفادلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استه از طراحان گرافیک است</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>طاهر نصیری</h5>
                                        <span>امروز 5:30 بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-2.jpg" alt=""></div>
                                        <div class="content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>فرشید</h5>
                                        <span>امروز 3:40بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-3.jpg" alt=""></div>
                                        <div class="content">
                                            <p>ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>مایکل رفت</h5>
                                        <span>دیروز 5:30 بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-1.jpg" alt=""></div>
                                        <div class="content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفادلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استه از طراحان گرافیک است</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>طاهر نصیری</h5>
                                        <span>امروز 5:30 بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-2.jpg" alt=""></div>
                                        <div class="content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-chat">
                                    <div class="head">
                                        <h5>فرشید</h5>
                                        <span>امروز 3:40بعد ظهر</span>
                                        <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                    </div>
                                    <div class="body">
                                        <div class="image"><img src="assets/images/comment/comment-3.jpg" alt=""></div>
                                        <div class="content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="widget-chat-submission">
                        <form action="#">
                            <input type="text" placeholder="چیزی را تایپ کنید">
                            <div class="buttons">
                                <label class="file-upload button button-sm button-box button-round button-primary" for="chat-file-upload">
                                    <input type="file" id="chat-file-upload" multiple>
                                    <i class="zmdi zmdi-attachment-alt"></i>
                                </label>
                                <button class="submit button button-sm button-box button-round button-primary"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div><!-- Chat End -->

        <!-- News & Updates Start -->
        <div class="col-xlg-5 col-lg-6 col-12 mb-30">
            <!-- News & Updates Wrap Start -->
            <div class="box">
                <div class="box-head">
                    <h4 class="title">اخبار و به روز رسانی ها</h4>
                </div>
                <div class="box-body">
                    <!-- News & Updates Inner Start -->
                    <div class="news-update-inner">

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="new">جدید</a>
                                    <a href="#" class="product">محصول</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">بهترین راه برای موفقیت همین است که دارید مشاهدش میکنید. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 ساعت قبل</li>
                                    <li>توسط: <a href="#">طاهر</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="support">پشتیبان</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">بهترین راه برای موفقیت لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 ساعت قبل</li>
                                    <li>توسط: <a href="#">طاهر</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="refund">بازپرداخت</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 ساعت قبل</li>
                                    <li>توسط: <a href="#">طاهر</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- News & Updates Inner End -->
                </div>
            </div><!-- News & Updates Wrap End -->
        </div><!-- News & Updates End -->

        <!-- Top Selling Country Start -->
        <div class="col-xlg-7 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">پر فروشترین کشور</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                </div>
            </div>
        </div><!-- Top Selling Country End -->

    </div>

</div><!-- Content Body End -->

@endsection

@section('script')

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{ asset('assets/js/plugins/moment/moment.min.js') }}"></script>

    <!--Date-range Picker-->
    <script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

    <!--Echarts-->
    <script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

    <!--VMap-->
    <script src="{{ asset('assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/vmap.active.js') }}"></script>

@endsection
