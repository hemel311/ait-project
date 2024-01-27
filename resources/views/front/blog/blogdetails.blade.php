@extends('front.master')
@section('title')
    Blog Details || AIT
@endsection
@section('body')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset('/front/assets')}}/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blog Post Right</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>Blog Post Right</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 order-last">
                        <div class="widget-area">
                            <div class="search-widget mb-50">
                                <div class="search-wrap">
                                    <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                    <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                </div>
                            </div>
                            <div class="recent-posts mb-50">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul>
                                    <li><a href="#">University while the lovely valley team work</a></li>
                                    <li><a href="#">High school program starting soon 2021</a></li>
                                    <li><a href="#">Modern School the lovely valley team work</a></li>
                                    <li><a href="#">While the lovely valley team work</a></li>
                                    <li><a href="#">This is a great source of content for anyone…</a></li>
                                </ul>
                            </div>
                            <div class="widget-archives mb-50">
                                <h3 class="widget-title">Archives</h3>
                                <ul>
                                    <li><a href="#">September 2020</a></li>
                                    <li><a href="#">September 2020</a></li>
                                </ul>
                            </div>
                            <div class="widget-archives mb-50">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="#">College</a></li>
                                    <li><a href="#">High School</a></li>
                                    <li><a href="#">Primary</a></li>
                                    <li><a href="#">School</a></li>
                                    <li><a href="#">University</a></li>
                                </ul>
                            </div>
                            <div class="recent-posts mb-50">
                                <h3 class="widget-title">Meta</h3>
                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries feed</a></li>
                                    <li><a href="#">Comments feed</a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pr-50 md-pr-15">
                        <div class="blog-deatails">
                            <div class="bs-img">
                                <a href="#"><img src="{{asset('/front/assets')}}/images/blog/inner/1.jpg" alt=""></a>
                            </div>
                            <div class="blog-full">
                                <ul class="single-post-meta">
                                    <li>
                                        <span class="p-date"> <i class="fa fa-calendar-check-o"></i> April 6, 2020 </span>
                                    </li>
                                    <li>
                                        <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                    </li>
                                    <li class="Post-cate">
                                        <div class="tag-line">
                                            <i class="fa fa-book"></i>
                                            <a href="#">Strategy</a>
                                        </div>
                                    </li>
                                    <li class="post-comment"> <i class="fa fa-comments-o"></i> 0</li>
                                </ul>
                                <div class="blog-desc">
                                    <p>
                                        We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.
                                    </p>
                                </div>
                                <blockquote><p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p></blockquote>
                                <div class="blog-desc mb-40">
                                    <p>
                                        Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.
                                    </p>
                                </div>
                                <h2 class="title mb-40">Economy may face double recession</h2>
                                <div class="blog-desc mb-35">
                                    <p>
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                    </p>
                                </div>
                                <div class="blog-img mb-40">
                                    <img src="{{asset('/front/assets')}}/images/blog/inner/2.jpg" alt="">
                                </div>
                                <div class="blog-desc mb-40">
                                    <p>
                                        Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.
                                    </p>
                                </div>
                                <ul class="unorder-list mb-20">
                                    <li>New Construction Benefit of Service</li>
                                    <li>Renovations Benefit of Service</li>
                                    <li>Historic Renovations and Restorations</li>
                                    <li>Additions Benefit of Service</li>
                                    <li>Rebuilding from fire or water damage</li>
                                </ul>
                                <h2 class="title">Experts Always Ready to Maximizing Products</h2>
                                <div class="blog-desc">
                                    <p>
                                        Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                                    </p>
                                </div>
                                <h4 class="sm-title">Experts Always Ready to Maximizing Products</h4>
                                <div class="blog-desc">
                                    <p>
                                        Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-navigation">
                            <ul>
                                <li><a href="#"><span class="next-link">Next<i class="flaticon-next"></i></span></a></li>
                                <li><a href="#"><span class="link-text">Soundtrack filma Lady Exclusive Music </span></a></li>
                            </ul>
                        </div>
                        <div class="comment-area">
                            <div class="comment-full">
                                <h3 class="reply-title">Leave a Reply</h3>
                                <p>
                                    <span>Your email address will not be published. Required fields are marked </span>
                                </p>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-20">
                                            <div class="form-group">
                                                <label class="mb-8">Name*</label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-20">
                                            <div class="form-group">
                                                <label class="mb-8">Email*</label>
                                                <input type="email" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 mb-45">
                                            <div class="form-group">
                                                <label class="mb-8">Your comment here...</label>
                                                <textarea cols="40" rows="10" class="textarea form-control" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="submit-btn">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="{{asset('/front/assets')}}/images/newsletter.png" alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->
@endsection