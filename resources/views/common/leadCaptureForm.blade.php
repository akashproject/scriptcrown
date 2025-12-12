<form method="post" id="lead_generate_form" action="#" >
    @csrf
    <div class="row">
        @include('common.leadCaptureFormField')
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
            <span > <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" alt="working" style="width: 42px;display:none" class="checkout_loader"></span>
        </div>
    </div>
</form>