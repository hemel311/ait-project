<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('/backend/assets')}}/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Service</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="colors.html">Add service</a>
                    </li>
                    <li>
                        <a href="typography.html">Manage service</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Courses</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Course category</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="{{route('addcoursecategory')}}">Add course category</a>
                            </li>
                            <li>
                                <a href="{{route('managecoursecategory')}}">Manage course category</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Curriculam</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="{{route('curriculam')}}">Add Curriculam </a>
                            </li>
                            <li>
                                <a href="{{route('managecurriculam')}}">Manage Curriculam</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Instructor</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="{{route('instructor')}}">Add Instructor </a>
                            </li>
                            <li>
                                <a href="{{route('manageinstructor')}}">Manage Instructor</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Faq</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="{{route('addfaq')}}">Add Faq </a>
                            </li>
                            <li>
                                <a href="{{route('manage-faq')}}">Manage Faq</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Courses</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="{{route('addcourse')}}">Add courses </a>
                            </li>
                            <li>
                                <a href="{{route('managecourse')}}">Manage courses</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Contact</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('general-contact')}}">General</a>
                    </li>
                    <li>
                        <a href="{{route('admission-contact')}}">Admission</a>
                    </li>
                    <li>
                        <a href="{{route('emergency-contact')}}">Emergency</a>
                    </li>
                    <li>
                        <a href="{{route('manage-contact')}}">Contacts</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Home</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Slide</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('add-slide')}}">Add Slide</a>
                            </li>
                            <li>
                                <a href="{{route('manage-slide')}}">Manage Slide</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Our Client</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('client')}}">Add Our client</a>
                            </li>
                            <li>
                                <a href="{{route('manageclient')}}">Manage Client</a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li>
                    {{--<li>--}}
                        {{--<a href="javascript:;">--}}
                            {{--<span class="nav-label">Explore top subject</span><i class="fa fa-angle-left arrow"></i></a>--}}
                        {{--<ul class="nav-2-level collapse">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('addtopsubject')}}">Add</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('managetopsubject')}}">Manage</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--</li>--}}
                    <li>
                    {{--<li>--}}
                        {{--<a href="javascript:;">--}}
                            {{--<span class="nav-label">Why learn Course</span><i class="fa fa-angle-left arrow"></i></a>--}}
                        {{--<ul class="nav-2-level collapse">--}}
                            {{--<li>--}}
                                {{--<a href="#">Add</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Manage</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    </li>
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Why Learn here</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('adddetails')}}">Add details</a>
                            </li>
                            <li>
                                <a href="{{route('managelearnhere')}}">Manage Details</a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Counter</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('addcounter')}}">Add</a>
                            </li>
                            <li>
                                <a href="{{route('managecounter')}}">Manage</a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Student Review</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('addreview')}}">Add Student review</a>
                            </li>
                            <li>
                                <a href="{{route('managereview')}}">Manage Student review</a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Event</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('addevent')}}">Add event</a>
                            </li>
                            <li>
                                <a href="{{route('manageevent')}}">Manage Event</a>
                            </li>
                            <li>
                                <a href="#">Manage event registered</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->