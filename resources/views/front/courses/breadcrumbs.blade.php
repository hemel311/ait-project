<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="{{asset('front/assets')}}/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">{{$categories->name}}</h1>
        <ul>
            <li>
                <a class="active" href="{{route('home')}}">Home</a>
            </li>
            <li>{{$categories->name}}</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->