<div class="col-lg-6 mb-2">
    <div class="form-floating mb-2">
        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
        <label for="name">Company Name</label>
    </div>
</div>
<div class="col-lg-6 mb-2">
    <div class="form-floating mb-2">
        <select class="form-control" id="business_type" name="business_type"  required>
            <option value="">Open to select</option>
            @foreach(getBusinesses() as $value)
                <option value="{{ $value->name }}">{{ $value->name }}</option>
            @endforeach
        </select>
        <label for="name">Select Business Type</label>
    </div>
</div>
@if(isset($service_id) && $service_id != '')
    <input type="hidden" class="form-control" id="service_name" name="service_name" value="{{ $service_id }}" required>
@else
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
@endif
<div class="col-lg-6 mb-2">
    <div class="form-floating mb-2">
        <input type="text" class="form-control" id="name" name="lead_name" placeholder="Enter Your Name" required>
        <label for="name">Your Name</label>
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