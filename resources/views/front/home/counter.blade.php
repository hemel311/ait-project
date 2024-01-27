<!-- Counter Section start -->
<div class="rs-counter home12-style pt-80">
    <div class="container">
        <div class="row couter-area bg8">
            @foreach($counters as $counter)
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="counter-item text-center">
                    <h2 class="rs-count pr-0">{{$counter->number}}</h2>
                    <span class="prefix">{{$counter->prefix}}</span>
                    <h4 class="title mb-0">{{$counter->heading}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Counter Section end -->