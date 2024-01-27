@extends('front.master')
@section('title')
    About || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        @include('front.about.bercumbs')
        @include('front.about.counter')
        @include('front.about.aboutsection')
        @include('front.about.team')
        @include('front.about.testimonial')
        @include('front.about.blog')
        @include('front.about.news')
    </div>
    <!-- Main content End -->
@endsection