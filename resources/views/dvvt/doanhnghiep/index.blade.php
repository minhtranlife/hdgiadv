@extends('main')

@section('custom-style')
    <!-- put the custom style for this page here -->
    <link rel="stylesheet" href="{{ url('vendors/DataTables/media/css/jquery.dataTables.css') }}">
    <!-- <link rel="stylesheet" href="{{ url('vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css') }}">-->
    <link rel="stylesheet" href="{{ url('vendors/DataTables/media/css/dataTables.bootstrap.css') }}">

@stop


@section('custom-script')
    <!-- put the custom script for this page here -->
    <script type="text/javascript" src="{{ url('vendors/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/DataTables/media/js/dataTables.bootstrap.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ url('vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ url('js/table-datatables.js') }}"></script>
@stop

@section('content')

    <div class="page-content">
        <div id="" class="row">
            <div class="col-lg-12">
                <form id="view_user">
                    <div class="portlet box">

                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th width="30%">Mô tả thao tác</th>
                                            <th>Hiển thị</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($model as $tthd)
                                        <tr>
                                            <td>{{$tthd->stt}}</td>
                                            <td align="left">
                                                <b>{{$tthd->mota}}</b><br>
                                                {!! nl2br(e($tthd->thaotac)) !!}
                                            </td>
                                            <td align="center">
                                                <?php $images=explode(';',$tthd->hienthi); ?>
                                                @foreach($images as $img)
                                                    <a href="{{url($url.$img)}}" target="_blank">
                                                        <img src="{{ url($url.$img)}}" alt="" class="img-responsive pull-center mrm"/></a>
                                                    </br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop