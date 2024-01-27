@extends('admin.master')
@section('title')
    Manage Top subjects
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">Top subjects</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Top subjects</li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Top subjects</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Name</th>
                                                <th>Short Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Name</th>
                                                <th>Short Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($topsubjects as $topsubject)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$topsubject->name}}</td>
                                                    <td>{{$topsubject->shortdescription}}</td>
                                                    <td><img src="{{asset($topsubject->image)}}" style="width: 100px;height: 100px" alt=""></td>
                                                    <td> {{$topsubject->status==1?'Published':'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('edittopsubject',['id'=>$topsubject->id])}}" class="btn btn-outline-warning">Edit</a>
                                                        <a href="{{route('deletetopsubject',['id'=>$topsubject->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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