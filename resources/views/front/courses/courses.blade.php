@extends('front.master')
@section('title')
    Courses || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        @include('front.courses.breadcrumbs')
        @include('front.courses.popularcourses')
        @include('front.courses.news')
    </div>
    <!-- Main content End -->
@endsection