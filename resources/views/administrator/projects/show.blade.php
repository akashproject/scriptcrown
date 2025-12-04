@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-project') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> General Options </h4>
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
					<div class="col-md-7" >
						<div class="mb-3 row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Name Here"  value="{{ $project->name }}" >
							</div>
						</div>

						<div class="mb-3 row">
							<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here"  value="{{ $project->slug }}" >
							</div>
						</div>

						<div class="mb-3 row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" >{{ $project->description }}</textarea>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="mb-3 row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Enable OTP</label>
							<div class="col-sm-9">
								<select name="enable_otp" id="enable_otp" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Enable Otp</option>
									<option value="1" {{ ( $project->enable_otp ==  '1' )? 'selected' : '' }}> Yes</option>
									<option value="0" {{ ( $project->enable_otp ==  '0' )? 'selected' : '' }}> No </option>
								<select>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $project->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $project->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>

						<div class="mb-3 row">
							<label for="tags" class="col-md-4 text-left control-label col-form-label">Banner Image</label>
							<div class="col-sm-8 text-project">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($project->banner_image))?getSizedImage('',$project->banner_image):'https://dummyimage.com/250x250?text=Add%20Image' }}" alt="" style="width:100%">
									<input type="hidden" name="banner_image" id="banner_image" value="{{ $project->banner_image }}" >	
								</a>	
								@if(isset($project->banner_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link" >
									<img src="{{ (isset($project->featured_image))?getSizedImage('thumb',$project->featured_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="{{ $project->featured_image }}" >	
								</a>	
								@if(isset($project->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif
							</div>
						</div>
					</div>
				</div>

				<h4 class="card-title"> Search Engine Options </h4>
				<div class="row">
					<div class="col-md-7" >
						<div class="mb-3 row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $project->title }}" >
							</div>
						</div>

						<div class="mb-3 row">
							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $project->meta_description }}</textarea>
							</div>
						</div>

						<div class="mb-3 row">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $project->schema }}</textarea>
							</div>
						</div>

						<div class="mb-3 row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $project->utm_campaign }}">
							</div>
						</div>

						<div class="mb-3 row">
							<label for="lead_type" class="col-sm-3 text-right control-label col-form-label">Communication Medium</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="lead_type" id="lead_type" placeholder="Enter Utm Campaign Here" value="{{ $project->lead_type }}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $project->utm_source }}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="{{ $project->robots }}" >
							</div>
						</div>

						<div class="mb-3 row">
							<label for="canonical" class="col-sm-3 text-right control-label col-form-label">Cronical Url</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter Center Pincode Here" value="{{ $project->canonical }}">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="project_id" id="project_id" value="{{ $project->id }}" >
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



