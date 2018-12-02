@extends('backend.layouts.master')

@section('style')

@endsection

@section('content')
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Events <span class="table-project-n"></span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">#</th>
                                        <th data-field="user_name" data-editable="true">User Name</th>
                                        <th data-field="company" data-editable="true">Email</th>
                                        <th data-field="price" data-editable="true">Joining Date</th>

                                        <th data-field="action">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $event)
                                        <tr>
                                            <td></td>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->email}}</td>
                                            <td>{{$event->created_at->toDayDateTimeString()}}</td>

                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- data table JS
		============================================ -->
    <script src="{{asset('template/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('template/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('template/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('template/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('template/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('template/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('template/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('template/js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{asset('template/js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{asset('template/js/editable/mock-active.js')}}"></script>
    <script src="{{asset('template/js/editable/select2.js')}}"></script>
    <script src="{{asset('template/js/editable/moment.min.js')}}"></script>
    <script src="{{asset('template/js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('template/js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{asset('template/js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{asset('template/js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('template/js/peity/peity-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('template/js/tab.js')}}"></script>
@endsection