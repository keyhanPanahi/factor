@extends('layouts.master')

@section('head-tag')
    <title>فاکتور ها</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">فاکتور ها</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('factor.create') }}" class="btn btn-primary"><span class="ti-plus"></span> ایجاد فاکتور جدید</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>موضوع</th>
                                <th>تاریخ</th>
                                <th>نام مشتری</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($factors as $factor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $factor->subject }}</td>
                                <td>{{  \Morilog\Jalali\Jalalian::forge($factor->date)->format('%A, %d %B %Y') }}</td>
                                <td>{{ $factor->customer->name }}</td>

                                <td>
                                    <a href="{{ route('factor.edit', $factor->id) }}" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> ویرایش</a>
                                    <a href="{{ route('item.index',$factor->id) }}" class="btn btn-success btn-sm"><span class="fa fa-th-large"></span> آیتم ها</a>
                                    <form class="d-inline" action="{{ route('factor.destroy',$factor->id) }}" method="post">
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
