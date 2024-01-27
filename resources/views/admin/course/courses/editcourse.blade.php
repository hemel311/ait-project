@extends('admin.master')
@section('title')
Edit Course || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Course</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updatecourse')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="course_id" value="{{$courseinfo->id}}">
                                    <label for="" class="form-label col-md-3">Course Category</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" selected>select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" value="{{$courseinfo->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="shortdescription" id="" cols="30" rows="10" class="form-control">
                                            {{$courseinfo->shortdescription}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="longdescription" id="" cols="30" rows="10" class="form-control">
                                            {{$courseinfo->longdescription}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Course Image</label>
                                    <div class="col-md-8">
                                        <img src="{{asset($courseinfo->image)}}" alt="" style="width: 50px;height: 50px">
                                        <input type="file" class="form-control" name="image" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Course Price</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="price" value="{{$courseinfo->price}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Course Duration</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="duration" value="{{$courseinfo->duration}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Instructor</label>
                                    <div class="col-md-8">
                                        <select name="instructor_id" id="" class="form-control">
                                            <option value="" selected>Select an instructor</option>
                                            @foreach($instructor as $instructors)
                                                <option value="{{$instructors->id}}">{{$instructors->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Status</label>
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{($courseinfo->status==1)? "checked":''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{($courseinfo->status==0)? "checked":''}}> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add Course">
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