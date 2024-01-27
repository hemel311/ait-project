@extends('admin.master')
@section('title')
    Edit Student review  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Student review</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updatereview')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="review_id" value="{{$reviewinfo->id}}">
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Student Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="{{$reviewinfo->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Review</label>
                                <div class="col-md-8">
                                    <textarea name="review"  cols="30" rows="10" class="form-control">
                                        {{$reviewinfo->review}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Student Image</label>
                                <div class="col-md-8">
                                    <img src="{{asset($reviewinfo->image)}}" alt="" style="width: 150px; height: 150px; margin-bottom: 10px">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{$reviewinfo->status==1?'checked':''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{$reviewinfo->status==0?'checked':''}}> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Update Review">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection