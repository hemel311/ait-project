@extends('admin.master')
@section('title')
    Edit Event  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Event</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updateevent')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="event_id" value="{{$event->id}}">
                                <label for="" class="form-label col-md-4">Event Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="{{$event->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Short description</label>
                                <div class="col-md-8">
                                    <textarea name="shortdescription"  cols="30" rows="10" class="form-control">
                                        {{$event->shortdescription}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Event Date</label>
                                <div class="col-md-2">
                                    <select name="day" id="" class="form-control">
                                        <option value="" selected>{{$event->day}}</option>
                                        @foreach($day as $days)
                                            <option value="{{$days->day}}">{{$days->day}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="month" id="" class="form-control">
                                        <option value="" selected>{{$event->month}}</option>
                                        @foreach($month as $months)
                                            <option value="{{$months->month}}">{{$months->month}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="year" id="" class="form-control">
                                        <option value="" selected>{{$event->year}}</option>
                                        @foreach($year as $years)
                                            <option value="{{$years->year}}">{{$years->year}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Event time</label>
                                <label for="" class="form-label col-md-1">From</label>
                                <div class="col-md-1">
                                    <select name="from_hour" id="" class="from-control">
                                        <option value="" selected>{{$event->from_hour}}</option>
                                        @foreach($hour as $hours)
                                            <option value="{{$hours->hour}}">{{$hours->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <select name="from_miniute" id="" class="from-control">
                                        <option value="" selected >{{$event->from_miniute}}</option>
                                        @foreach($miniute as $miniutes)
                                            <option value="{{$miniutes->miniute}}">{{$miniutes->miniute}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <select name="form_am_pm" id="" class="from-control">
                                        <option value="" selected >{{$event->from_miniute}}</option>
                                        <option value="am" selected >AM</option>
                                        <option value="pm">PM</option>
                                    </select>
                                </div>
                                <label for="" class="form-label">To</label>
                                <div class="col-md-1">
                                    <select name="to_hour" id="" class="from-control">
                                        <option value="" selected >{{$event->to_hour}}</option>
                                        @foreach($hour as $hours)
                                            <option value="{{$hours->hour}}">{{$hours->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <select name="to_miniute" id="" class="from-control">
                                        <option value="" selected >{{$event->to_miniute}}</option>
                                        @foreach($miniute as $miniutes)
                                            <option value="{{$miniutes->miniute}}">{{$miniutes->miniute}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <select name="to_am_pm" id="" class="from-control">
                                        <option value="" selected >{{$event->to_am_pm}}</option>
                                        <option value="am" selected >AM</option>
                                        <option value="pm" selected >PM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Event Image</label>
                                <div class="col-md-8">
                                    <img src="{{asset($event->image)}}" alt="" style="width: 50px;height: 50px">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Event Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{$event->status==1?"checked":""}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{$event->status==0?"checked":""}}> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add details">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection