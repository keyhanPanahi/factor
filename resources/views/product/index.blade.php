@extends('layouts.master')

@section('head-tag')
    <title>محصولات</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">محصولات</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('product.create') }}" class="btn btn-primary"><span class="ti-plus"></span> ایجاد محصول جدید</a>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>قیمت</th>
                                <th>تنظیمات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price,3) }}</td>

                                <td>
                                    <a href="{{ route('customer.edit', $product->id) }}" class="btn btn-primary btn-sm"><span class="ti-edit"></span> ویرایش</a>
                                    <form class="d-inline" action="{{ route('product.destroy',$product->id) }}" method="post">
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
