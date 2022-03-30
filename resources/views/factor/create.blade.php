@extends('layouts.master')

@section('head-tag')
    <title>افزودن فاکتور</title>
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">افزودن فاکتور</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('factor.index') }}" class="btn btn-primary"><span class="ti-back-right"></span> بازگشت</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('factor.store') }}" method="post">
                            @csrf
                        <div class="row mbn-20">

                            <!--Form Field-->
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">انتخاب مشتری</label>
                                    <select name="customer_id" id="" class="form-control form-control-sm">
                                        <option value="" disabled>مشتری را انتخاب کنید</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}" @if(old('customer_id') == $customer->id) selected @endif>{{ $customer->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('customer_id')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">موضوع فاکتور</label>
                                    <input type="text" name="subject" class="form-control form-control-sm" value="{{ old('subject') }}">
                                </div>
                                @error('subject')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">تاریخ</label>
                                    <input type="text" name="date" id="date" class="form-control form-control-sm d-none">
                                    <input type="text" id="date_view" class="form-control form-control-sm">
                                </div>
                                @error('date')
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
    <script src="{{ asset('assets/js/plugins/jalalidatepicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jalalidatepicker/persian-datepicker.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#date_view').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#date'
            })
        });
    </script>

@endsection
