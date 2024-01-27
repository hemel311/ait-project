<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.meta')
    <title>@yield('title')</title>
    @include('admin.layout.css')
</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    @include('admin.layout.header.header')
   @include('admin.layout.header.menu.navbar')
    <div class="content-wrapper">
        @yield('body')
        @include('admin.layout.footer.footer')
    </div>
</div>
@include('admin.layout.themeconfig')
@include('admin.layout.paga')
@include('admin.layout.js')
@if(Session::has('message'))
    <script>
        $(document).ready(function () {
            toastr.success('{{Session::get('message')}}')
        })
    </script>
@endif
</body>

</html>