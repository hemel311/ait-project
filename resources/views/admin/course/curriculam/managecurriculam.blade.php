@extends('admin.master')
@section('title')
    Manage Course Curriculam || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">Course Curriculam</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Course Curriculam </li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Course Curriculam </div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Course Category</th>
                                                <th> Course name</th>
                                                <th>Curriculam Heading</th>
                                                <th>Course Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Course Category</th>
                                                <th> Course name</th>
                                                <th>Curriculam Heading</th>
                                                <th>Course Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($curriculams as $curriculam)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$curriculam->category->name}}</td>
                                                    <td>{{$curriculam->course->name}}</td>
                                                    <td>{{$curriculam->heading}}</td>
                                                    <td>{{$curriculam->description}}</td>
                                                    <td> {{$curriculam->status==1?'Published':'Unpublished'}}</td>
                                                    <td><a href="{{route('edit-curriculam',['id'=>$curriculam->id])}}" class="btn btn-outline-warning">Edit</a>
                                                        <a href="{{route('delete-curriculam',['id'=>$curriculam->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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