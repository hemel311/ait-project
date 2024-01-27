@extends('admin.master')
@section('title')
    Edit Counter  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Counter</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updatecounter')}}" method="post" >
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" value="{{$counterinfo->id}}" name="counter_id">
                                <label for="" class="col-md-4 form-label">Heading</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="heading" value="{{$counterinfo->heading}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="number" value="{{$counterinfo->number}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Prefix</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="prefix" value="{{$counterinfo->prefix}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Status</label>
                                <div class="col-md-8">
                                    <div class="col-md-8">
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="1" name="status" {{$counterinfo->status==1? 'checked':''}}> Published</label>
                                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" value="0" name="status" {{$counterinfo->status==0? 'checked':''}}> Unpublished</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Update Counter details">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection