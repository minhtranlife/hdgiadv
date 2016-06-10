@extends('main')

@section('custom-style')
    <!-- put the custom style for this page here -->
    <link rel="stylesheet" href="{{ url('vendors/DataTables/media/css/jquery.dataTables.css') }}">
    <!-- <link rel="stylesheet" href="{{ url('vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css') }}">-->
    <link rel="stylesheet" href="{{ url('vendors/DataTables/media/css/dataTables.bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('vendors/bootstrap-datepicker/css/datepicker.css') }}">

    <style>

        .ul-report li {
            margin-top: 7px;
        }

        .datepicker {
            z-index: 2000 !important;
        }

        a:hover{
            cursor: pointer;
        }
    </style>
@stop


@section('custom-script')
    <!-- put the custom script for this page here -->
    <script type="text/javascript" src="{{ url('vendors/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/DataTables/media/js/dataTables.bootstrap.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ url('vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ url('js/table-datatables.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/form-validation.js') }}"></script>

@stop

@section('content')
    <div class="page-content">
        <div id="" class="row">
            <div class="col-lg-12">
                <form id="view_user">
                    <div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                <b>Hướng dẫn sử dụng đơn vị quản lý</b>
                            </div>
                            <div class="actions">
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="ul-report">
                                        <li>1. Tổng quan về chương trình
                                            <a href="https://drive.google.com/file/d/0B-H5ht2aLTaieUlkWkNxTDVFYlE/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                        <li>2. Truy cập vào chương trình
                                            <a href="https://drive.google.com/file/d/0B-H5ht2aLTaiR0hZNGluMUg4bVk/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                        <li>3. Màn hình tổng quan của chương trình
                                            <a href="https://drive.google.com/file/d/0B-H5ht2aLTaiZWUtdHptZHRJSGM/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                        <li>4. Xét duyệt kê khai giá dịch vụ
                                            <a href="https://drive.google.com/file/d/0B-H5ht2aLTaiQ0JDQnlIVVpBRGc/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                        <li>5. Thông tin công bố<a href="https://drive.google.com/file/d/0B-H5ht2aLTaiVGd5RC0xSmJibHM/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                        <li>6. Quản trị hệ thống<a href="https://drive.google.com/file/d/0B-H5ht2aLTaiY2dNaGVuQnhaQlE/view?usp=sharing" target="_blank">
                                                &nbsp;(<u>Xem chi tiết</u>)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop


