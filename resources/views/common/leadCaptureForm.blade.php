<div class="leadModel lead-capture_popup__form contact-form-validated form-one" >
    <div class="row">
        <div class="col-md-7">
            <div class="leadModelHeader">
                <div class="headerLogo">
                    <a class="td_site_branding td_accent_color" href="{{ url('/') }}">
                        <img src="{{ url('assets/logo/logo.png') }}" class="width-100">                         
                    </a> 
                </div>
            </div>
            <div class="leadModelBody">
                <div class="">
                    <a >Contact Details</a>
                </div>
                <form method="post" id="lead_generate_form" action="#" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <select class="form-control" id="name" name="business"  required>
                                    <option value="">Open to select</option>
                                    @foreach(getBusinesses() as $value)
                                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <label for="name">Select Business Type</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <select class="form-control" id="name" name="business"  required>
                                    <option value="">Open to select</option>
                                    @foreach(getServices() as $value)
                                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <label for="email_address">Select Service</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="name" name="lead_name" placeholder="Enter Your Name" required>
                                <label for="name">Brand Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="name" name="lead_name" placeholder="Enter Your Name" required>
                                <label for="name">Owner Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="email_address" name="lead_email" placeholder="Enter Your Email Address" required>
                                <label for="email_address">Email Address</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="mobile" name="lead_phone" placeholder="Enter Your Mobile Number" required>
                                <label for="mobile_number">Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group disclaimer">
                                <p style="margin:0">
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fab fa-whatsapp" style="color: green;"></i> whatsapp. 
                                </p>
                                <p style="margin:0">
                                <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive promotional and marketing material on Email. 
                                </p>
                                <p>
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">
                            <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">
                            <input type="hidden" name ="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >
                            <input type="hidden" name ="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  
                            <input type="hidden" name ="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  
                            <input type="hidden" name ="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  
                            <input type="hidden" name ="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" >   
                            <input type="hidden" name ="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  
                            <input type="hidden" name ="source_url" value="{{ url()->current() }}" >
                        </div>
                    </div>
                    <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                        <div class="col-lg-6 text-center-lg">
                        
                        </div>
                        <div class="col-lg-6 d-flex" style="align-items: center;">
                            <div class="form-one__control form-one__control--full mx-2">
                                <button type="submit" class="th-btn style3 shadow-none">
                                    <span>Submit Enquiry</span>
                                    <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                                </button>
                            </div>
                            <span > <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" alt="working" style="width: 42px;display:none" class="checkout_loader"></span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-5 position-relative">
            <div class="modelSideBanner">
                <div class="sec-title sec-title--center wow fadeInUp mb-3 mt-5" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title" style="font-size:22px"><span>Placed </span> <span class="sec-title__title__shape">Students</span><span class="sec-title__title__text"> Story</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row justified-content-center">
                    
                </div>
            </div>
        </div>
    </div>
</div>