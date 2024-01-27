@extends('admin.master')
@section('title')
    Instructor||AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Instructor</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('createnewinstructor')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Designation</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="designation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Phone number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Instructor Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Facebook profile link</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="fprofile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Linkden profile link</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="lprofile">
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
                                        <input type="submit" class="btn btn-success" value="Add Instructor">
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