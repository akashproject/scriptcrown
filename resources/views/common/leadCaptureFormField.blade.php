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