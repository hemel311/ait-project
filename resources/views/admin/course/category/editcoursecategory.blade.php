@extends('admin.master')
@section('title')
    Edit Course Category || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Course Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('updatecoursecategory')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="coursecategory_id" value="{{$categoryinfo->id}}">
                                    <label for="" class="form-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" value="{{$categoryinfo->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                            {{$categoryinfo->description}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Status</label>
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{($categoryinfo->status==1)? "checked":''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{($categoryinfo->status==0)? "checked":''}}> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update course Category">
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