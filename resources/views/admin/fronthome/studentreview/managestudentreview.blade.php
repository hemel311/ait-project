@extends('admin.master')
@section('title')
    Manage Student review
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">Manage student review</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Manage student review</li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Manage student review</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Student Name</th>
                                                <th>Review</th>
                                                <th>Student Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Student Name</th>
                                                <th>Review</th>
                                                <th>Student Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($reviews as $review)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$review->name}}</td>
                                                    <td>{{$review->review}}</td>
                                                    <td><img src="{{asset($review->image)}}" style="width: 100px;height: 100px;" alt=""></td>
                                                    <td> {{$review->status==1?'Published':'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('editreview',['id'=>$review->id])}}" class="btn btn-outline-warning" >Edit</a>
                                                        <a href="{{route('deletereview',['id'=>$review->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
        </div>
    </section>
@endsection