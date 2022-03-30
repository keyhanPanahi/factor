@extends('layouts.master')

@section('head-tag')
    <title>آیتم ها</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">آیتم ها</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('factor.index') }}" class="btn btn-primary"><span class="ti-back-right"></span> بازگشت</a>
                        <a href="{{ route('item.create',$factor->id) }}" class="btn btn-primary"><span class="ti-plus"></span> ایجاد آیتم جدید</a>
                    </div>
                    <div class="box-head">
                        <ul>
                        <li><h6>موضوع  فاکتور : {{ $factor->subject }} </h6></li>
                        <li><h6> تاریخ فاکتور : {{ \Morilog\Jalali\Jalalian::forge($factor->date)->format('%A, %d %B %Y') }} </h6></li>
                        <li><h6> نام مشتری : {{ $factor->customer->name }} </h6></li>
                        </ul>
                    </div>

                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام محصول</th>
                                <th>مقدار</th>
                                <th> قیمت هر واحد</th>
                                <th>جمع کل</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($factor->items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{ $item->total_prices }}</td>


                                <td>
                                    <a href="{{ route('item.edit',[$factor->id,$item->id]) }}" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> ویرایش</a>
                                    <form class="d-inline" action="{{ route('item.destroy',$item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete" type="submit"><i class="ti-trash"></i> حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
            <!--Default Data Table End-->

        </div>

    </div><!-- Content Body End -->
@endsection
@section('script')

    <!-- JS
============================================ -->

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{ asset('assets/js/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/datatables.active.js') }}"></script>

    @include('sweetalert.delete-confirm', ['className' => 'delete'])



@endsection
