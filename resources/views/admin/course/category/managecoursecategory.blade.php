@extends('admin.master')
@section('title')
    Manage Course Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="card">
                      <div class="card-body">
                          <div class="page-heading">
                              <h1 class="page-title">Course Category</h1>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item">
                                      <a href="{{route('home')}}"><i class="la la-home font-20"></i></a>
                                  </li>
                                  <li class="breadcrumb-item">Course Category</li>
                              </ol>
                          </div>
                          <div class="page-content fade-in-up">
                              <div class="ibox">
                                  <div class="ibox-head">
                                      <div class="ibox-title">Course Category</div>
                                  </div>
                                  <div class="ibox-body">
                                      <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                          <thead>
                                          <tr>
                                              <th>Sl NO.</th>
                                              <th>Name</th>
                                              <th>Description</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tfoot>
                                          <tr>
                                              <th>Sl NO.</th>
                                              <th>Name</th>
                                              <th>Description</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                          </tfoot>
                                          <tbody>
                                          @foreach($coursecategories as $coursecategory)
                                          <tr>
                                              <td>{{$loop->iteration}}</td>
                                              <td>{{$coursecategory->name}}</td>
                                              <td>{{$coursecategory->description}}</td>
                                              <td> {{$coursecategory->status==1?'Published':'Unpublished'}}</td>
                                              <td><a href="{{route('editcoursecategory',['id'=>$coursecategory->id])}}" class="btn btn-outline-warning">Edit</a>
                                                  <a href="{{route('deletecourseCategory',['id'=>$coursecategory->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
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