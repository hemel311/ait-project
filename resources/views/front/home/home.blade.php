@extends('front.master')
@section('title')
    Home || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
       @include('front.home.banner')
       @include('front.home.partner')
       @include('front.home.service')
       @include('front.home.categories')
       @include('front.home.whychoose')
       @include('front.home.counter')
       @include('front.home.testmonial')
       @include('front.home.events')
       @include('front.home.blog')
       @include('front.home.newsteller')
    </div>
    <!-- Main content End -->
@endsection