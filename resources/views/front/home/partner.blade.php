<!-- Partner Start -->
<div class="rs-partner style2 pt-100 md-pt-70">
    <div class="container">
        <h2 class="text-center">Our Client</h2>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            @foreach($partnerinfo as $partner)
            <div class="partner-item">
                <a href="#"><img src="{{asset($partner->image)}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Partner End -->