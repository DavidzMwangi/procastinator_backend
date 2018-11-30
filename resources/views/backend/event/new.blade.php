@extends('backend.layouts.master')
@section('style')

    @endsection
@section('content')
    <div class="basic-form-area mg-tb-15">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>New Event</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="{{route('event.new_event')}}" method="post">


                                                {{csrf_field()}}

                                                @if(count($errors->all)>0)

                                                    <div class="alert alert-danger">

                                                        @foreach($errors->all() as $error)

                                                            <li>{{$error}}</li>
                                                            @endforeach
                                                    </div>
                                                    @endif
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="event_name">Event Name</label>
                                                            <input type="text" name="event_name" placeholder="Event Name" class="form-control">
                                                        </div>



                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="event_date">Event Date</label>
                                                            <input type="date" name="event_date" placeholder="Event Date" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="event_time">Event Time</label>
                                                            <input type="time" name="event_time" placeholder="Event Time" class="form-control">
                                                        </div>



                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="reminder_date">Reminder Date</label>
                                                            <input type="date" name="reminder_date" placeholder="Reminder Date" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="reminder_time">Reminder Time</label>
                                                            <input type="time" name="reminder_time" placeholder="Reminder Time" class="form-control">
                                                        </div>



                                                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                                                            <label for="description">Description</label>
                                                            <input type="text" name="description" placeholder="Description" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white" type="reset">Cancel</button>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Changes</button>
                                                                </div>
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
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('script')

    @endsection
