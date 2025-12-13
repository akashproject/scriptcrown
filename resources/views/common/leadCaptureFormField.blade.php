@csrf
<div class="row">
    <div class="col-lg-6 mb-2">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
            <label for="company_name">Company Name</label>
        </div>
    </div>
    <div class="col-lg-6 mb-2">
        <div class="form-floating mb-2">
            <select class="form-control" id="business_type" name="business_type">
                <option value="">Open to select</option>
                @foreach(getBusinesses() as $value)
                    <option value="{{ $value->name }}">{{ $value->name }}</option>
                @endforeach
            </select>
            <label for="name">Select Industry</label>
        </div>
    </div>
    <!-- Service Category-->
    @if(isset($category_id) && $category_id != '')
        <input type="hidden" class="form-control" id="service_category" name="service_category" value="{{ $category_id }}">
        <div class="col-lg-6 mb-2">
            <div class="form-floating mb-2">
                <select class="form-control" id="service_name" name="service_name" >
                    <option value="">Open to select</option>
                    @foreach(getServices(isset($category_id)?$category_id:null) as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                <label for="email_address">Select Service</label>
            </div>
        </div>
    @endif
    <!-- Service -->
    @if(isset($service_id) && $service_id != '')
        <input type="hidden" class="form-control" id="service_name" name="service_name" value="{{ $service_id }}">
    @endif  

    @if(!isset($category_id) && !isset($service_id))
    <div class="col-lg-12 mb-2">
        <div class="form-service-category d-flex flex-wrap gap-1" >
            @foreach(getCategories() as $value)
            <label class="form-category-chekbox" for="service_category_{{ $value->id }}" class="me-3">
                <input type="checkbox" id="service_category_{{ $value->id }}" name="service_category[]" value="{{ $value->id }}">
                {{ $value->name }}
            </label>
            @endforeach
        </div>
    </div>
    @endif
    
    <div class="col-lg-6 mb-2">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Your Name" required>
            <label for="full_name">Your Name</label>
        </div>
    </div>
    <div class="col-lg-6 mb-2">
        <div class="form-floating mb-2">
            <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Your Email Address" required>
            <label for="email_address">Email Address</label>
        </div>
    </div>
    <div class="col-lg-6 mb-2">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Your Mobile Number" required>
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
            <button type="submit" class="th-btn shadow-none">
                <span>Submit Enquiry</span>
                <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
            </button>
        </div>
        <span > <img src="loader.gif" alt="working" style="width: 42px;display:none" class="checkout_loader"></span>
    </div>
</div>