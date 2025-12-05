@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ route('admin-save-client') }}" enctype="multipart/form-data">
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
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="designation" class="col-sm-3 text-right control-label col-form-label">Designation</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation Here" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="company_name" class="col-sm-3 text-right control-label col-form-label">Company Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name Here" >
							</div>
						</div>
					</div>
					<div class="col-md-4" >
						<div class=" row mb-2">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="https://dummyimage.com/150x150?text=Add%20Image" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="" >	
								</a>	
							</div>
						</div>
						<div class=" row mb-2">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Company Logo</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="https://dummyimage.com/150x150?text=Add%20Image" alt="">
									<input type="hidden" name="company_logo" id="company_logo" value="" >	
								</a>	
								@if(isset($universityCourse->company_logo))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif
							</div>
						</div>
					</div>
				</div>
				<h4 class="card-title"> Search Engine Options </h4>
				<div class="row">
					<div class="col-md-8" >
						<div class="form-group row mb-2">
							<label for="meta_title" class="col-sm-3 text-right control-label col-form-label">Meta Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Meta Title Here" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" ></textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" ></textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="Google-Organic" >
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="SEO">
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="index, follow">
							</div>
						</div>
					</div>
					<div class="col-md-4" >

					</div>
				</div>
			</div>

			

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="client_id" id="client_id" value="" >
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