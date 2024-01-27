<!-- Testimonial Section Start -->
<div class="rs-testimonial home12-style">
    <div class="container">
        <div class="sec-title4 mb-50 md-mb-30 text-center">
            <div class="sub-title primary">Testimonial</div>
            <h2 class="title mb-0">What Our Students Says</h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @foreach($reviews as $review)
            <div class="testi-item">
                <div class="item-content-basic">
                    <div class="desc"><img class="quote" src="{{asset('/front/assets')}}/images/testimonial/home12/quote.png" alt="">{{$review->review}}</div>
                    <div class="testi-content">
                        <div class="img-wrap">
                            <img src="{{asset($review->image)}}" alt="">
                        </div>
                        <div class="name">
                            {{$review->name}}
                        </div>
            </div>
        </div>
    </div>
            @endforeach
</div>
<!-- Testimonial Section End -->