<!-- Popular Courses Section Start -->
<div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                <div class="courses-item">
                    <div class="img-part">
                        <img src="{{asset($course->image)}}" alt="">
                    </div>
                    <div class="content-part">
                        <span><a class="categories" href="#">{{$course->category->name}}</a></span>
                        <ul class="meta-part">
                            <li class="user"><i class="fa fa-user"></i> 245</li>
                            <li><span class="price">Tk.{{$course->price}}</span></li>
                        </ul>
                        <h3 class="title"><a href="{{route('coursesingle',['id'=>$course->id])}}">{{$course->name}}</a></h3>
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
            @endforeach
        </div>
    </div>
</div>
<!-- Popular Courses Section End -->