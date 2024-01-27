@extends('front.master')
@section('title')
    Blog || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        @include('front.blog.breadcrumbs')
        @include('front.blog.blogsection')
        @include('front.blog.news')
    </div>
    <!-- Main content End -->
@endsection