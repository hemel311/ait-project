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
                        <h4 class="text-center">Add Day</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('createday')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Day</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="day">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add day">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection