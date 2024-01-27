@extends('admin.master')
@section('title')
    Manage Course || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-heading">
                                <h1 class="page-title">Contacts</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Contacts </li>
                                </ol>
                            </div>
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Contacts</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Sl NO.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($contactinfo as $contactinfos)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$contactinfos->name}}</td>
                                                    <td>{{$contactinfos->email}}</td>
                                                    <td>{{$contactinfos->phone}}</td>
                                                    <td>{{$contactinfos->subject}}</td>
                                                    <td>{{$contactinfos->message}}</td>
                                                    <td>
                                                        <a href="{{route('delete-contact',['id'=>$contactinfos->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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