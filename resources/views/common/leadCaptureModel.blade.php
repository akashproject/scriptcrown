<div class="leadModel lead-capture_popup__form contact-form-validated form-one" >
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 position-relative lead-form-side-panel">
                    <div class="leadModelHeader">
                        <div class="headerLogo">
                            <a class="td_site_branding td_accent_color" href="{{ url('/') }}">
                                <img src="{{ url('assets/logo/logo.png') }}" class="width-100">                         
                            </a> 
                        </div>
                    </div>
                    <div class="modelSideBanner">
                        <div class="sec-title sec-title--center wow fadeInUp mb-3" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <h3 class="sec-title__title" style="font-size:30px">Contact us directly</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <ul class="form-contact-features list-unstyled">
                            <li>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Text us on:</p>
                                        <a href="tel:+19088000393" class="contact-feature_link">+190-8800-0393</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Call Us On:</p>
                                        <a href="tel:+19088000393" class="contact-feature_link">+190-8800-0393</a>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div class="contact-feature">
                                    <div class="icon-btn">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="contact-feature_label">Quick Mail Us:</p>
                                        <a href="mailto:info@webteck.com" class="contact-feature_link">info@webteck.com</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="leadModelHeader">
                        
                    </div>
                    <div class="leadModelBody">
                        <div class="sec-title sec-title--center wow fadeInUp mb-3 mt-5" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <h2 class="sec-title__title" style="font-size:30px">Let’s discuss your project</h2><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <form method="post" id="lead_generate_form_popup" class="lead_generate_form_popup" action="{{ route('capture-lead') }}" >
                            @include('common.leadCaptureFormField')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>