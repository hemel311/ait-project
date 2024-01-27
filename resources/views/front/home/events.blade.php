<!-- Events Section Start -->
<div class="rs-event home12style">
    <div class="container">
        <div class="sec-title4 text-center mb-50">
            <div class="sub-title">Join Events</div>
            <h2 class="title purple-color">Upcoming Events</h2>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
            @foreach($events as $event)
                <div class="event-item home12-style">
                <div class="event-short">
                    <div class="featured-img">
                        <img src="{{asset($event->image)}}" alt="Image">
                    </div>
                    <div class="content-part">
                        <div class="all-dates-time">
                            {{--<div class="address"><i class="fa fa-map-o"></i> Online</div>--}}
                            <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$event->from_hour}}:{{$event->from_miniute}}{{$event->form_am_pm}} - {{$event->to_hour}}:{{$event->to_miniute}}{{$event->to_am_pm}}</div>
                        </div>
                        <h4 class="title"><a href="#">{{$event->name}}</a></h4>
                        <div class="event-btm">
                            <div class="date-part">
                                <div class="date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    {{$event->month}} {{$event->day}} {{$event->year}}
                                </div>
                            </div>
                            <div class="btn-part">
                                <a href="#">Join Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<!-- Events Section End -->