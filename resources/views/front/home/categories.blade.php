<!-- Categories Section Start -->
<div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pt-90 pb-100 md-pt-0 md-pb-0">
    <div class="container">
        <div class="sec-title4 text-center mb-45">
            <div class="sub-title">Select Courses</div>
            <h2 class="title black-color">Explore Popular Courses</h2>
        </div>
        <div class="row">
            @foreach($popularcourseinfo as $courseinfo)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><img src="{{$courseinfo->image}}" alt="" style="width: 150px;height: 150px"></a>
                        </div>
                        <div class="content-part">
                            <div class="info-meta">
                                <ul>
                                    <li class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        (1 rating)
                                    </li>
                                </ul>
                            </div>
                            <div class="course-price">
                                <span class="price">{{$courseinfo->price}}BDT</span>
                            </div>
                            <h3 class="title"><a href="#">{{$courseinfo->name}}</a></h3>
                            <ul class="meta-part">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    0 Student
                                </li>
                                <li class="user">
                                    <i class="fa fa-clock-o"></i>
                                    {{$courseinfo->duration}} month
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Categories Section End -->