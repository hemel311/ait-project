@extends('front.master')
@section('title')
    Contact|| AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay ">
            <div class="breadcrumbs-img">
                <img src="{{asset('front/assets')}}/images/breadcrumbs/6.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title white-color">Contact 2</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="rs-contact-img mb-90">
                    <div class="row">
                        <div class="col-lg-6 md-mb-30">
                            <div class="img-part js-tilt">
                                <img src="{{asset('front/assets')}}/images/contact/contact4.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-50 md-pl-15">
                            <!-- Map Section Start -->
                            <div class="contact-map3">
                                <iframe src="https://maps.google.com/maps?q=mirpur%20stadium&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
                            <!-- Map Section End -->
                        </div>
                    </div>
                </div>
                <div class="row mb-90 md-mb-50">
                    <div class="col-lg-4 col-md-12 md-mb-30">
                        <div class="rs-contact-wrap">
                            <div class="inner-part text-center">
                                <h2 class="title2">General</h2>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Addresss</span>
                                    <span class="des">{{$generalcontact->email}}</span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number</span>
                                    <span class="des"><a href="#">{{$generalcontact->number}}</a></span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Address</span>
                                    <span class="des">{{$generalcontact->address}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 md-mb-30">
                        <div class="rs-contact-wrap">
                            <div class="inner-part text-center">
                                <h2 class="title2">Admissions</h2>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Address</span>
                                    <span class="des">{{$admissioncontact->email}}</span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number 1</span>
                                    <span class="des"><a href="#">{{$admissioncontact->firstnumber}}</a></span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number 2</span>
                                    <span class="des"><a href="#">{{$admissioncontact->secondnumber}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="rs-contact-wrap">
                            <div class="inner-part text-center">
                                <h2 class="title2">Emergency</h2>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Address</span>
                                    <span class="des">emergency@educavo.com</span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number 1</span>
                                    <span class="des"><a href="tel+0885898745">(+088)589-8745</a></span>
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number 2</span>
                                    <span class="des"><a href="tel+0885898102">(+088)589-102</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-quick-contact">
                    <h4 class="text-center">Quick contact</h4>
                    <form method="post" action="{{route('contact-form')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text"  name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text"  name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text"  name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text"  name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-lg-12 mb-50">
                                <textarea class="from-control"  name="message" placeholder=" Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-12">
                            <input class="btn-send" type="submit" value="Submit Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="{{asset('front/assets')}}/images/newsletter.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->
@endsection