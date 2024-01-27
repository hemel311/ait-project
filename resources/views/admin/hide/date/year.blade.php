@extends('admin.master')
@section('title')
    Add Event  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Add Year</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('createyear')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Year</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="add-year">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection