<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-2">
                <div class="logo-cat-wrap">
                    <div class="logo-part">
                        <a href="{{route('home')}}">
                            <img src="{{asset('/front/assets')}}/images/ait.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 text-end">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <li class="menu-item"> <a href="{{route('home')}}">Home</a></li>
                                <li class="menu-item">
                                    <a href="{{route('about')}}">About</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('service')}}">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('service')}}">Web Design and Development</a> </li>
                                        <li><a href="{{route('service')}}">eCommerce Development</a> </li>
                                        <li><a href="{{route('service')}}">Mobile App Development</a> </li>
                                        <li><a href="{{route('service')}}">Web Hosting Service</a> </li>
                                        <li><a href="{{route('service')}}">University Management System</a> </li>
                                    </ul>
                                </li>

                                <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="">Courses</a>
                                    <ul class="mega-menu">
                                        <li class="mega-menu-container">
                                            <div class="mega-menu-innner">
                                                <div class="single-megamenu">
                                                    <ul class="sub-menu">
                                                        @foreach($categories as $category)
                                                        <li><a href="{{route('courses',['id'=>$category->id])}}">{{$category->name}}</a> </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> <!-- //.mega-menu -->
                                </li>
                                <!--                                             <li class="menu-item-has-children">-->
                                <!--                                                 <a href="#">Courses</a>-->
                                <!--                                                 <ul class="sub-menu">-->
                                <!--                                                     <li><a href="course.html">Courses One</a> </li>-->
                                <!--                                                     <li><a href="course2.html">Courses Two</a> </li>-->
                                <!--                                                     <li><a href="course3.html">Courses Three</a> </li>-->
                                <!--                                                     <li><a href="course4.html">Courses Four</a>-->
                                <!--                                                     </li>-->
                                <!--                                                     <li><a href="course5.html">Courses Five</a> </li>-->
                                <!--                                                     <li><a href="course-single.html">Courses Single</a> </li>-->
                                <!--                                                 </ul>-->
                                <!--                                             </li>-->
                                <li class="menu-item">
                                    <a href="{{route('jobplacement')}}">Job Placements</a>

                                </li>
                                <!--                                             <li class="menu-item-has-children">-->
                                <!--                                                 <a href="#">Pages</a>-->
                                <!--                                                 <ul class="sub-menu">-->
                                <!--                                                     <li class="menu-item-has-children right">-->
                                <!--                                                         <a href="#">Team</a>-->
                                <!--                                                         <ul class="sub-menu right">-->
                                <!--                                                             <li><a href="team.html">Team One</a></li>-->
                                <!--                                                             <li><a href="team2.html">Team Two</a></li>-->
                                <!--                                                             <li><a href="team-single.html">Team Single</a></li>-->
                                <!--                                                         </ul>-->
                                <!--                                                     </li>-->
                                <!--                                                     <li class="menu-item-has-children">-->
                                <!--                                                         <a href="#">Event</a>-->
                                <!--                                                         <ul class="sub-menu right">-->
                                <!--                                                             <li><a href="events-style1.html">Event One</a></li>-->
                                <!--                                                             <li><a href="events-style2.html">Event Two</a></li>-->
                                <!--                                                             <li><a href="events-style3.html">Event Three</a></li>-->
                                <!--                                                         </ul>-->
                                <!--                                                     </li>-->
                                <!--                                                     <li class="menu-item-has-children">-->
                                <!--                                                         <a href="#">Gallery</a>-->
                                <!--                                                         <ul class="sub-menu right">-->
                                <!--                                                             <li><a href="gallery-style1.html">Gallery One</a></li>-->
                                <!--                                                             <li><a href="gallery-style2.html">Gallery Two</a></li>-->
                                <!--                                                             <li><a href="gallery-style3.html">Gallery Three</a></li>-->
                                <!--                                                         </ul>-->
                                <!--                                                     </li>-->
                                <!--                                                     <li class="menu-item-has-children">-->
                                <!--                                                         <a href="#">Shop</a>-->
                                <!--                                                         <ul class="sub-menu right">-->
                                <!--                                                             <li><a href="shop.html">Shop</a></li>-->
                                <!--                                                             <li><a href="shop-single.html">Shop Single</a></li>-->
                                <!--                                                             <li><a href="cart.html">Cart</a></li>-->
                                <!--                                                             <li><a href="checkout.html">Checkout</a></li>-->
                                <!--                                                         </ul>-->
                                <!--                                                     </li>-->
                                <!--                                                     <li class="menu-item-has-children">-->
                                <!--                                                         <a href="#">Others</a>-->
                                <!--                                                         <ul class="sub-menu right">-->
                                <!--                                                             <li><a href="faq.html">FAQ</a></li>-->
                                <!--                                                             <li><a href="error.html">404 Page</a></li>-->
                                <!--                                                             <li><a href="login.html">Login</a></li>-->
                                <!--                                                             <li><a href="register.html">Register</a></li>-->
                                <!--                                                         </ul>-->
                                <!--                                                     </li>-->
                                <!--                                                 </ul>-->
                                <!--                                             </li>-->

                                <li class="menu-item">
                                    <a href="{{route('blog')}}">Blog</a>
                                    <ul class="sub-menu">
                                        {{--<li><a href="{{route('blog')}}">Blog</a></li>--}}
                                        {{--<li class="menu-item-has-children">--}}
                                            {{--<a href="#">Blog Sidebar</a>--}}
                                            {{--<ul class="sub-menu right">--}}
                                                {{--<li><a href="blog-left.html">Blog Left Sidebar</a></li>--}}
                                                {{--<li><a href="blog-right.html">Blog Right Sidebar</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item-has-children">--}}
                                            {{--<a href="#">Single Post</a>--}}
                                            {{--<ul class="sub-menu right">--}}
                                                {{--<li><a href="blog-post-left.html">Post Left Sidebar</a></li>--}}
                                                {{--<li><a href="blog-post-right.html">Post Right Sidebar</a></li>--}}
                                                {{--<li><a href="blog-single.html">Full Width Post</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('contact')}}">Contact</a>
                                    <!--                                                 <ul class="sub-menu">-->
                                    <!--                                                    <li><a href="contact.html">Contact One</a> </li>-->
                                    <!--                                                    <li><a href="contact2.html">Contact Two</a> </li>-->
                                    <!--                                                    <li><a href="contact3.html">Contact Three</a> </li>-->
                                    <!--                                                    <li><a href="contact4.html">Contact Four</a> </li>-->
                                    <!--                                                 </ul>-->
                                </li>
                                {{--<li class="menu-item">--}}
                                    {{--<a href="{{route('login')}}">Login</a>--}}
                                    {{--<!--                                                 <ul class="sub-menu">-->--}}
                                    {{--<!--                                                    <li><a href="contact.html">Contact One</a> </li>-->--}}
                                    {{--<!--                                                    <li><a href="contact2.html">Contact Two</a> </li>-->--}}
                                    {{--<!--                                                    <li><a href="contact3.html">Contact Three</a> </li>-->--}}
                                    {{--<!--                                                    <li><a href="contact4.html">Contact Four</a> </li>-->--}}
                                    {{--<!--                                                 </ul>-->--}}
                                {{--</li>--}}
                            </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                </div>
            </div>
            <div class="col-lg-1 text-end">
                <div class="expand-btn-inner">
                    <ul>
                        <li>
                            <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                <i class="flaticon-search"></i>
                            </a>
                        </li>
                        <li class="icon-bar cart-inner no-border mini-cart-active">
                            <a class="cart-icon">
                                <!-- <span class="cart-count">2</span> -->
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                            <div class="woocommerce-mini-cart text-start">
                                <div class="cart-bottom-part">
                                    <ul class="cart-icon-product-list">
                                        <li class="display-flex">
                                            <div class="icon-cart">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <a href="cart.html">Law Book</a><br>
                                                <span class="quantity">1 × $30.00</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="cart.html"><img src="{{asset('/front/assets')}}/images/shop/1.jpg" alt="Product Image"></a>
                                            </div>
                                        </li>
                                        <li class="display-flex">
                                            <div class="icon-cart">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <a href="cart.html">Spirit Level</a><br>
                                                <span class="quantity">1 × $30.00</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="cart.html"><img src="{{asset('/front/assets')}}/images/shop/2.jpg" alt="Product Image"></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="total-price text-center">
                                        <span class="subtotal">Subtotal:</span>
                                        <span class="current-price">$85.00</span>
                                    </div>

                                    <div class="cart-btn text-center">
                                        <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                        <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End --> 