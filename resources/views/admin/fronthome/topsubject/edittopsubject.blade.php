@extends('admin.master')
@section('title')
    Edit top subject  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Top subject</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updatetopsubject')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="topsubject_id" value="{{$topsubjectinfo->id}}">
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Subject Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="{{$topsubjectinfo->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Short description</label>
                                <div class="col-md-8">
                                    <textarea name="shortdescription"  cols="30" rows="10" class="form-control">
                                        {{$topsubjectinfo->shortdescription}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Subject Image</label>
                                <div class="col-md-8">
                                    <img src="{{asset($topsubjectinfo->image)}}" alt="" style="width: 50px; height: 50px;">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{$topsubjectinfo->status==1? 'checked':''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{$topsubjectinfo->status==0? 'checked':''}}> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Update Top subject">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection