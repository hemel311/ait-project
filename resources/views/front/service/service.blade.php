@extends('front.master')
@section('titile')
    SERVICE || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset('front/assets')}}/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Course Grid 02</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Course</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/7.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Photography</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/8.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Web Development</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">Become a PHP Master and Make Money Fast</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/9.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Web Development</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">Learn Python – Interactive Python Tutorial</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 md-mb-30">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/1.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Web Development</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">From Zero to Hero with Advance Nodejs</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/2.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Photography</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="courses-item">
                            <div class="img-part">
                                <img src="{{asset('front/assets')}}/images/courses/3.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <span><a class="categories" href="#">Web Development</a></span>
                                <ul class="meta-part">
                                    <li class="user"><i class="fa fa-user"></i> 245</li>
                                    <li><span class="price">$55.00</span></li>
                                </ul>
                                <h3 class="title"><a href="course-single.html">Learning jQuery Mobile for Beginners</a></h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                (05)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses Section End -->

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