<!DOCTYPE html>
<html lang="zxx">
<head>
   @include('front.layout.meta')
    <title>@yield('title')</title>
    @include('front.layout.css')
</head>
<body class="defult-home">
@include('front.layout.preloader')



<!--Full width header Start-->
<div class="full-width-header header-style1 home1-modifiy home12-modifiy">
    @include('front.layout.header.header')
</div>
<!--Full width header End-->

@yield('body')

@include('front.layout.footer.footer')

@include('front.layout.scrollup')


@include('front.layout.searchmodal')

<!-- modernizr js -->
@include('front.layout.js')
@if(Session::has('message'))
    <script>
        $(document).ready(function () {
            toastr.success('{{Session::get('message')}}')
        })
    </script>
@endif
</body>
</html>