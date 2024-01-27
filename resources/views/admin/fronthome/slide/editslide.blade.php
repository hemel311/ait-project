@extends('admin.master')
@section('title')
    Admission Contact  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit slide info</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-slide')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" value="{{$slideinfo->id}}" name="slide_id">
                                <label for="" class="col-md-4 form-label">Welcome text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="welcometext" value="{{$slideinfo->welcometext}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Header</label>
                                <div class="col-md-8">
                                    <textarea name="header" id="" cols="30" rows="10" class="form-control">
                                        {{$slideinfo->header}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Add button text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="buttontext" value="{{$slideinfo->buttontext}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Add button link</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="buttonlink" value="{{$slideinfo->buttonlink}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{($slideinfo->status==1)? "checked":''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status"{{($slideinfo->status==0)? "checked":''}}> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Update slide details">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection