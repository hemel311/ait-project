@extends('front.master')
@section('title')
    Course || AIT
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
                <h1 class="page-title">{{$courses->name}}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>{{$courses->name}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Intro Courses -->
        <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="col-lg-8 md-mb-50">
                        <!-- Intro Info Tabs-->
                        <div class="intro-info-tabs">
                            <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                                <li class="nav-item tab-btns" role="presentation">
                                    <a class="nav-link tab-btn active" id="prod-overview-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item tab-btns" role="presentation">
                                    <a class="nav-link tab-btn" id="prod-curriculum-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-curriculum" role="tab" aria-controls="prod-curriculum" aria-selected="false">Curriculum</a>
                                </li>
                                <li class="nav-item tab-btns" role="presentation">
                                    <a class="nav-link tab-btn" id="prod-instructor-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-instructor" role="tab" aria-controls="prod-instructor" aria-selected="false">Instructor</a>
                                </li>
                                <li class="nav-item tab-btns" role="presentation">
                                    <a class="nav-link tab-btn" id="prod-faq-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-faq" role="tab" aria-controls="prod-faq" aria-selected="false">Faq</a>
                                </li>
                                <li class="nav-item tab-btns" role="presentation">
                                    <a class="nav-link tab-btn" id="prod-reviews-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-reviews" role="tab" aria-controls="prod-reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                    <div class="content white-bg pt-30">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <h4>{{$courses->name}}</h4>
                                                <p>{{$courses->shortdescription}}</p>
                                                <p>{{$courses->longdescription}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="prod-curriculum-tab">
                                    <div class="content">
                                        <div id="accordion" class="accordion-box">
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">UI/ UX Introduction</button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                    <div class="card-body acc-content current">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a class="popup-videos play-icon" href="https://www.youtube.com/watch?v=atMUy_bPoQI"><i class="fa fa-play"></i>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Color Theory</button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                    <div class="card-body acc-content">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Basic Typography</button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                    <div class="card-body acc-content">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                    <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                        <h3 class="instructor-title">Instructors</h3>
                                        <div class="row rs-team style1 orange-color transparent-bg clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 sm-mb-30">
                                                <div class="team-item">
                                                    <img src="{{asset('front/assets')}}/images/team/1.jpg" alt="">
                                                    <div class="content-part">
                                                        <h4 class="name"><a href="#">Jhon Pedrocas</a></h4>
                                                        <span class="designation">Professor</span>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="team-item">
                                                    <img src="{{asset('front/assets')}}/images/team/2.jpg" alt="">
                                                    <div class="content-part">
                                                        <h4 class="name"><a href="#">Jhon Pedrocas</a></h4>
                                                        <span class="designation">Professor</span>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                    <div class="content">
                                        <div id="accordion3" class="accordion-box">
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingSeven">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">UI/ UX Introduction</button>
                                                    </h5>
                                                </div>

                                                <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordion3">
                                                    <div class="card-body acc-content current">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a class="popup-videos play-icon" href="https://www.youtube.com/watch?v=atMUy_bPoQI"><i class="fa fa-play"></i>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingEight">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Color Theory</button>
                                                    </h5>
                                                </div>
                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#accordion3">
                                                    <div class="card-body acc-content">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingNine">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Basic Typography</button>
                                                    </h5>
                                                </div>
                                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#accordion3">
                                                    <div class="card-body acc-content">
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"><i class="ripple"></i></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="popup-videos play-icon"><span class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="minutes">35 Minutes</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prod-reviews" role="tabpanel" aria-labelledby="prod-reviews-tab">
                                    <div class="content pt-30 pb-30 white-bg">
                                        <div class="cource-review-box mb-30">
                                            <h4>Stephane Smith</h4>
                                            <div class="rating">
                                                <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                            </div>
                                            <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                            <div class="helpful">Was this review helpful?</div>
                                            <ul class="like-option">
                                                <li><i class="fa fa-thumbs-o-up"></i></li>
                                                <li><i class="fa fa-thumbs-o-down"></i></li>
                                                <li><a class="report" href="#">Report</a></li>
                                            </ul>
                                        </div>
                                        <div class="cource-review-box mb-30">
                                            <h4>Anna Sthesia</h4>
                                            <div class="rating">
                                                <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                            </div>
                                            <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                            <div class="helpful">Was this review helpful?</div>
                                            <ul class="like-option">
                                                <li><i class="fa fa-thumbs-o-up"></i></li>
                                                <li><i class="fa fa-thumbs-o-down"></i></li>
                                                <li><a class="report" href="#">Report</a></li>
                                            </ul>
                                        </div>
                                        <div class="cource-review-box mb-30">
                                            <h4>Petey Cruiser</h4>
                                            <div class="rating">
                                                <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                            </div>
                                            <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                            <div class="helpful">Was this review helpful?</div>
                                            <ul class="like-option">
                                                <li><i class="fa fa-thumbs-o-up"></i></li>
                                                <li><i class="fa fa-thumbs-o-down"></i></li>
                                                <li><a class="report" href="#">Report</a></li>
                                            </ul>
                                        </div>
                                        <div class="cource-review-box">
                                            <h4>Rick O'Shea</h4>
                                            <div class="rating">
                                                <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                            </div>
                                            <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                            <div class="helpful">Was this review helpful?</div>
                                            <ul class="like-option">
                                                <li><i class="fa fa-thumbs-o-up"></i></li>
                                                <li><i class="fa fa-thumbs-o-down"></i></li>
                                                <li><a class="report" href="#">Report</a></li>
                                            </ul>
                                            <a href="#" class="more">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column col-lg-4">
                        <div class="inner-column">
                            <!-- Video Box -->
                            {{--<div class="intro-video media-icon orange-color2">--}}
                                {{--<img class="video-img" src="{{asset('front/assets')}}/images/about/about-video-bg2.png" alt="Video Image">--}}
                                {{--<a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">--}}
                                    {{--<i class="fa fa-play"></i>--}}
                                {{--</a>--}}
                                {{--<h4>Preview this course</h4>--}}
                            {{--</div>--}}
                            <!-- End Video Box -->
                            <div class="course-features-info">
                                <ul>
                                    <li class="lectures-feature">
                                        <i class="fa fa-files-o"></i>
                                        <span class="label">Lectures</span>
                                        <span class="value">3</span>
                                    </li>

                                    <li class="quizzes-feature">
                                        <i class="fa fa-puzzle-piece"></i>
                                        <span class="label">Quizzes</span>
                                        <span class="value">0</span>
                                    </li>

                                    <li class="duration-feature">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="label">Duration</span>
                                        <span class="value">{{$courses->duration}} </span>
                                    </li>

                                    <li class="students-feature">
                                        <i class="fa fa-users"></i>
                                        <span class="label">Students</span>
                                        <span class="value">21</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-part">
                                <a href="#" class="btn readon2 orange">TK.{{$courses->price}}</a>
                                <a href="#" class="btn readon2 orange-transparent">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End intro Courses -->
    </div>
    <!-- Main content End -->
@endsection