<div class="space" id="contact-sec" data-bg-src="{{ url('assets/frontend/img/bg/appointment_bg_1.jpg') }}">
    <div class="round-container bg-white p-5">
            <div class="row">
                <div class="col-xl-7 pe-xxl-5 mb-40 mb-xl-0">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}"></span>
                                <img src="{{ url('assets/frontend/img/theme-img/title_shape_1.svg') }}" alt="shape">
                            </div>
                            APPOINTMENT NOW
                        </span>
                        <h2 class="sec-title">We're Ready to Talk About Your <span class="text-theme">Opportunities</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 text-xl-start text-center">Progressively morph principle-centered e-markets without an expanded array of opportunities. Conveniently incubate e-tailers for extensive leadership skills. Holisticly extend leading-edge vortals vis-a-vis 24/7 e-markets. Appropriately evolve efficient functionalities with installed base relationships.</p>
                    <div class="contact-feature-wrap">
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Call Us On:</p>
                                <a href="tel:{{ get_theme_setting('mobile') }}" class="contact-feature_link">{{ get_theme_setting('mobile') }}</a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Quick Mail Us:</p>
                                <a href="mailto:{{ get_theme_setting('email') }}" class="contact-feature_link">{{ get_theme_setting('email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 ps-xl-4">
                    <div class="embed-form">
                        <h3 class="h4 mt-n2 mb-30 text-center">Make An Appointment</h3>
                        @include('common.leadCaptureForm')
                    </div>
                </div>
            </div>

    </div>
</div>