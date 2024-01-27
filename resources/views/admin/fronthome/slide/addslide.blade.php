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
                        <h4 class="text-center">Add slide info</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add-new-slide')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Welcome text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="welcometext" placeholder="Enter the welcome text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Header</label>
                                <div class="col-md-8">
                                    <textarea name="header" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Add button text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="buttontext" placeholder="Enter the Button text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Add button link</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="buttonlink" placeholder="Enter the Button link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status"> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status"> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add slide details">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection