@extends('layouts.master')

@section('head-tag')
    <title>ویرایش آیتم</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">ویرایش آیتم</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <a href="{{ route('item.index',$factor->id) }}" class="btn btn-primary"><span class="ti-back-right"></span> بازگشت</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('item.update',[$factor->id,$item->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="row mbn-20">

                            <!--Form Field-->
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">انتخاب کالا</label>
                                    <select name="product_id" id="" class="form-control form-control-sm">
                                        <option value="" disabled>کالا را انتخاب کنید</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}" @if(old('product_id',$item->product_id) == $product->id) selected @endif>{{ $product->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('product_id')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">قیمت هر واحد</label>
                                    <input type="number" name="unit_price" class="form-control form-control-sm" value="{{ old('unit_price',$item->unit_price) }}">
                                </div>
                                @error('unit_price')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="form-group">
                                    <label for="">تعداد</label>
                                    <input type="number" name="amount" class="form-control form-control-sm" value="{{ old('amount',$item->amount) }}">
                                </div>
                                @error('amount')
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
