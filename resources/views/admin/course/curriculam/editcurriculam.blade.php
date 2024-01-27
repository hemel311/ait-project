@extends('admin.master')
@section('title')
    Edit Curriculam || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Curriculam</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update-curriculam')}}" method="post">
                                @csrf
                                <input type="hidden" name="curriculam_id" value="{{$curriculaminfo->id}}">
                                <input type="hidden" name="category_id" value="{{$curriculaminfo->category_id}}">
                                <input type="hidden" name="course_id" value="{{$curriculaminfo->course_id}}">
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Curriculam Heading</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="heading" value="{{$curriculaminfo->heading}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                            {{$curriculaminfo->description}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{($curriculaminfo->status==1)? "checked":''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{($curriculaminfo->status==0)? "checked":''}}> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Curriculam">
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