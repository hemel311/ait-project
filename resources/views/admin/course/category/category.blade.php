@extends('admin.master')
@section('title')
    Add Course Category || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                           <h4 class="text-center">Add Course Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('createnewcoursecategory')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control-file" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Status</label>
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status"> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add course Category">
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