<!-- Services Section Start -->
<div id="rs-services" class="rs-services home12-style">
    <div class="container">
        <div class="sec-title4 text-center mb-50">
            <div class="sub-title">Increase Your Skill</div>
            <h2 class="title purple-color">Explore Top Subjects</h2>
        </div>
        <div class="row">
            @foreach($topsubjecinfo as $topsubject)
            <div class="col-lg-4 md-mb-30">
                <div class="services-item">
                    <div class="services-image">
                        <div class="services-icons">
                            <img src="{{asset($topsubject->image)}}" alt="">
                        </div>
                        <div class="services-text">
                            <div class="services-title">
                                <h2 class="title">{{$topsubject->name}}</h2>
                            </div>
                            <p class="text">
                                {{$topsubject->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-12 text-center pt-45">
            <a class="readon green-btn" href="#">View All Subjects </a>
        </div>
    </div>
</div>
<!-- Services Section End -->