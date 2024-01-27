@extends('admin.master')
@section('title')
    Manage Counter
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">Counter</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Counter</li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Events</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Event Name</th>
                                                <th>Event date</th>
                                                <th>Event time</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Event Name</th>
                                                <th>Event date</th>
                                                <th>Event time</th>
                                                <th>Event Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($events as $event)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$event->name}}</td>
                                                    <td>{{$event->day}}{{$event->month}}{{$event->year}}</td>
                                                    <td>{{$event->from_hour}}:{{$event->from_miniute}}{{$event->form_am_pm}} -{{$event->to_hour}}:{{$event->to_miniute}}{{$event->to_am_pm}}</td>
                                                    <td><img src="{{asset($event->image)}}" alt=""style="width: 50px; height: 50px;"></td>
                                                    <td> {{$event->status==1?'Published':'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('editevent',['id'=>$event->id])}}" class="btn btn-outline-warning">Edit</a>
                                                        <a href="{{route('deleteevent',['id'=>$event->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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
        </div>
    </section>
@endsection