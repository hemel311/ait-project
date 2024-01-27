@extends('admin.master')
@section('title')
    Add Faq
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Faq</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('create-new-faq')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Course Category</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" selected disabled="">Select a course Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Course Name</label>
                                    <div class="col-md-8">
                                        <select name="course_id" id="" class="form-control">
                                            <option value="" selected disabled>Select a course Name</option>
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Question</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="question">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-3">Answer</label>
                                    <div class="col-md-8">
                                        <textarea name="answer" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                <input type="submit" class="btn btn-success" value="Add Faq">
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