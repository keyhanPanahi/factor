@extends('layouts.master')

@section('head-tag')
    <title>مشتریان</title>
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">مشتریان</h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <button class="button button-primary" data-toggle="modal" data-target="#exampleModal3">ایجاد مشتری</button>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>تنظیمات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $customer->name }}</td>

                                <td>
                                    <form class="d-inline" action="{{ route('customer.destroy',$customer->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete" type="submit"><i class="ti-trash"></i> حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <div class="col-lg-6 col-12 mb-30">
                            <div class="box">

                                <div class="box-body">
                                    <form action="{{ route('customer.store') }}" method="post">
                                        @csrf
                                    <div class="modal fade" id="exampleModal3">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">ساخت مشتری</h5>
                                                    <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="">
                                                        <div class="col-12 mb-15">
                                                            <label for="">نام و نام خانوادگی </label>
                                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                                        </div>
                                                        @error('name')
                                                        <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                          <strong>
                                                              {{ $message }}
                                                          </strong>
                                                      </span>
                                                        @enderror
                                                    </div>                                                </div>
                                                <div class="modal-footer">
                                                    <button class="button button-danger" data-dismiss="modal">بستن</button>
                                                    <button class="button button-primary">ثبت</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
