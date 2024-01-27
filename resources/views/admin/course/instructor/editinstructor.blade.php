@extends('admin.master')
@section('title')
   Edit Instructor||AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Instructor</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update-instructor')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="instructor_id" value="{{$instructorinfo->id}}">
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" value="{{$instructorinfo->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Designation</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="designation" value="{{$instructorinfo->designation}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Phone number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="number" value="{{$instructorinfo->number}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Instructor Image</label>
                                    <div class="col-md-8">
                                        <img src="{{asset($instructorinfo->image)}}" alt="" style="width: 100px; height: 100px;">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Facebook profile link</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="fprofile" value="{{$instructorinfo->fprofile}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Linkden profile link</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="lprofile" value="{{$instructorinfo->lprofile}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Status</label>
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{($instructorinfo->status==1)? "checked":''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{($instructorinfo->status==0)? "checked":''}}> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Instructor">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection