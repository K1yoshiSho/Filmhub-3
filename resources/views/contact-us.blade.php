<section class="section contact" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h2 class="heading">Contact Us</h2>
                    <p class="text-muted mt-2 fs-17">If you have a question you are interested in, leave your contacts and write your question and we will get back to you as soon as we can </p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <div class="card">
                        <div class="card-body">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6833.824048284042!2d71.41470933516548!3d51.09090663988602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424585a605525605%3A0x4dff4a1973f7567e!2sAstana%20IT%20University!5e0!3m2!1sru!2skz!4v1649680554810!5m2!1sru!2skz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div data-aos="fade-left" data-aos-duration="1800">
                    @if(Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                        </div>
                    @endif
                    <form method="post" action="{{route('contact.send')}}" enctype="multipart/form-data" class="contact-form" name="contact-form" id="myForm"> <span id="error-msg"></span>
                        @csrf
                        <div class="row rounded-3 py-3">
                            <div class="col-lg-12">
                                <div class="position-relative mb-8"> <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*"> </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3"> <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*"> </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3"> <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject"> </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative mb-3"> <span class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                    <textarea name="message" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-10">

                                <button type="submit" id="submitSend" name="send" class="btn btn-danger" value="Send Message">Send</button> </div>

                        </div>
                    </form>
                    <!--end form-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section> <!-- CONRACT FORM -->
