<!-- Faq Section Start -->
<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                <div class="main-part new-style">
                    <div class="title mb-21">
                        <h2 class="text-part mb-0">Frequently Asked Questions</h2>
                    </div>
                    @foreach($faqs as $faq)
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item card">

                                <div class="accordion-header card-header" id="headingOne">
                                    <button class="accordion-button card-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{$faq->question}}</button>
                                </div>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body card-body">{{$faq->answer}}</div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 padding-0 col-md-12">
                <div class="rs-free-contact">
                    <div class="sec-title3">
                        <h2 class="title white-color">Register Free Courses</h2>
                    </div>
                    <form id="contact-form" method="post" action="mailer.php">
                        <div class="row">
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-lg-12 mb-35">
                                <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-btn">
                            <input class=" readon submit-requset" type="submit" value="Submit-Requset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq Section Start -->