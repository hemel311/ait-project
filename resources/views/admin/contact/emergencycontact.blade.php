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
                        <h4 class="text-center">Emergency Contact info</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add-emergency-contact')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" placeholder="Enter the email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Phone Number 1</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="firstnumber" placeholder="Enter the first phone number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label">Phone Number2</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="secondnumber" placeholder="Enter the second phone number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Add emergency contact">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection