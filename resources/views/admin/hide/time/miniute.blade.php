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
                        <h4 class="text-center">Add Miniute</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('createminiute')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Miniute</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="miniute">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="form-label col-md-4">Miniute</label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add miniute">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection