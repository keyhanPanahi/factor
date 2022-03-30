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
                    <h3 class="title">افزودن محصولات</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('product.index') }}" class="btn btn-primary"><span class="ti-back-right"></span> بازگشت</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                        <div class="row mbn-20">

                            <!--Form Field-->
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="col-12 mb-15">
                                    <label for="">نام کالا </label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="col-12 mb-15">
                                    <label for="">قیمت کالا </label>
                                    <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                                </div>
                                @error('price')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                        <div class="col-12 text-left">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                             </div>
                        </div>

                        </form>
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

@endsection
