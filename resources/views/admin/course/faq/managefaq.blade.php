@extends('admin.master')
@section('title')
    Manage Faq || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">FAQ</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">FAQ </li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">FAQ</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Course Category</th>
                                                <th> Course name</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Course Category</th>
                                                <th> Course name</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($faques as $faq)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$faq->category->name}}</td>
                                                    <td>{{$faq->course->name}}</td>
                                                    <td>{{$faq->question}}</td>
                                                    <td>{{$faq->answer}}</td>
                                                    <td> {{$faq->status==1?'Published':'Unpublished'}}</td>
                                                    <td><a href="{{route('edit-faq',['id'=>$faq->id])}}" class="btn btn-outline-warning">Edit</a>
                                                        <a href="{{route('delete-faq',['id'=>$faq->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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