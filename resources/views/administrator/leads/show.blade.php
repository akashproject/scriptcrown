@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ route('admin-save-lead') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

					</div>

				@endif
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="row">
					<div class="col-md-8" >
						<div class="form-group row mb-3">
							<label for="full_name" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name Here" value="{{ $lead->full_name }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="email_address" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="email_address" id="email_address" placeholder="Enter Email Address Here" value="{{ $lead->email_address }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="mobile_number" class="col-sm-3 text-right control-label col-form-label">Mobile Number</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number Here" value="{{ $lead->mobile_number }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="whatsapp_number" class="col-sm-3 text-right control-label col-form-label">Whatsapp Number</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="whatsapp_number" id="whatsapp_number" placeholder="Enter Mobile Number Here" value="{{ $lead->whatsapp_number }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="city" id="city" placeholder="Enter City Here" value="{{ $lead->city }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">State</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="state" id="state" placeholder="Enter State Here" value="{{ $lead->state }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="country" class="col-sm-3 text-right control-label col-form-label">Country</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="country" id="country" placeholder="Enter Country Here" value="{{ $lead->country }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="company_name" class="col-sm-3 text-right control-label col-form-label">Company Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name Here" value="{{ $lead->company_name }}" >
							</div>
						</div>

						<div class="mb-3 row">
							<label for="requirement" class="col-sm-3 text-right control-label col-form-label">Requirement</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="requirement" id="requirement" placeholder="Enter Requirement Here" >{{ $lead->requirement }}</textarea>
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="document" class="col-sm-3 text-right control-label col-form-label">Document</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="document" id="document" >
							</div>
						</div>
						
						<div class="form-group row mb-2">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="Google-Organic" value="{{ $lead->utm_campaign }}" >
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="SEO" value="{{ $lead->utm_source }}">
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="lead_type" class="col-sm-3 text-right control-label col-form-label">Lead Type</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="lead_type" id="lead_type" placeholder="Enter Utm Source Here"  value="DM" value="{{ $lead->lead_type }}">
							</div>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="form-group row mb-2">
							<label for="business_type" class="col-sm-3 text-left control-label col-form-label">Business Type</label>
							<div class="col-sm-9">
								<select name="business_type" id="business_type" class="select2 form-control custom-select">	
									<option value="">Select Services</option>
									@foreach(getBusinesses() as $value)
									<option value="{{ $value->id }}">{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="service_category" class="col-sm-3 text-left control-label col-form-label">Category</label>
							<div class="col-sm-9">
								<select name="service_category" id="service_category" class="select2 form-control custom-select">	
									<option value="">Select Category</option>
									@foreach(getCategories() as $value)
									<option value="{{ $value->id }}">{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="service_name" class="col-sm-3 text-left control-label col-form-label">Services</label>
							<div class="col-sm-9">
								<select name="service_name" id="service_name" class="select2 form-control custom-select">	
									<option value="">Select Services</option>
									@foreach(getServices() as $value)
									<option value="{{ $value->id }}">{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="technology" class="col-sm-3 text-left control-label col-form-label">Technology</label>
							<div class="col-sm-9">
								<select name="technology" id="technology" class="select2 form-control custom-select">	
									<option value="">Select Services</option>
									@foreach(getTechnologies() as $value)
									<option value="{{ $value->id }}">{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>
						
						<div class="mb-2 row">
							<label for="status_basket" class="col-sm-3 text-left control-label col-form-label">Status Busket</label>
							<div class="col-sm-9">
								<select name="status_basket" id="status_basket" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="Fresh">Fresh</option>
									<option value="Called" > Called</option>
									<option value="Emailed" > Emailed </option>
								<select>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="lead_id" id="lead_id" value="{{ $lead->id }}" >
				</div>
			</div>
		</form>

	</div>
</div>              

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

