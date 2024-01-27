@extends('admin.master')
@section('title')
    General Contact  || AIT
@endsection
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">General Contact info</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add-general-contact')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" placeholder="Enter the email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="number" placeholder="Enter the number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="address" placeholder="Enter the address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add general contact">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection