<!-- Choose Section Start -->
<div class="why-choose-us style3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 js-tilt md-mb-40">
                <div class="img-part">
                    <img src="{{asset('/front/assets')}}/images/choose/home12/1.png" alt="">

                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title3 mb-30">
                    <h2 class=" title new-title margin-0 pb-15">Why Learn Here</h2>
                </div>
                @foreach($learnhere as $learnheres)
                <div class="services-part mb-20">
                    <div class="services-icon">
                        <img src="{{asset($learnheres->image)}}" alt="">
                    </div>
                    <div class="services-text">
                        <h2 class="title"> {{$learnheres->heading}}</h2>
                        <p class="services-txt"> {{$learnheres->shortdescription}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Choose Section End -->