@extends('admin.master')
@section('title')
    Add Counter  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Add Counter</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('createCounter')}}" method="post" >
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Heading</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="heading">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Prefix</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="prefix">
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
                                    <input type="submit" class="btn btn-outline-success" value="Add Counter details">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection