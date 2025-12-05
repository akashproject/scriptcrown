@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ route('admin-save-service') }}" enctype="multipart/form-data">
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
						<div class="form-group row mb-2">
							<label for="name" class="col-sm-3 control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" value="{{ $service->name }}" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="slug" class="col-sm-3 control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here" value="{{ $service->slug }}" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="description" class="col-sm-3 control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="description" placeholder="Enter description Here" >{{ $service->description }}</textarea>
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="excerpt" class="col-sm-3 control-label col-form-label">Exerpt</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="excerpt" id="excerpt" placeholder="Enter excerpt Here" >{{ $service->excerpt }}</textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="faqs" class="col-sm-3 text-left control-label col-form-label">Faqs</label>
							<div class="col-sm-9">
								<select name="faqs[]" id="faqs" class="select2 form-control custom-select" style="width: 100%; height:100px;" multiple>	
									@foreach (getFaqs() as $faq)
									<option value="{{ $faq->id }}" {{ ($service->faqs != null && in_array($faq->id,  $service->faqs))?'selected' : '' }}> {{  $faq->question }} </option>
									@endforeach
								</select>
							</div>
						</div>	
					</div>

					<div class="col-md-4">
						<div class="mb-3 row">
							<label for="template" class="col-sm-3 text-right control-label col-form-label">Template</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="template" id="template" placeholder="Template Here" value="{{ $service->template }}">
							</div>
						</div>	

						<div class="row mb-2">
							<label for="type_id" class="col-sm-12 text-left control-label col-form-label">Select Category</label>
							<div class="col-sm-12">
								<select name="type_id[]" id="type_id" class="select2 form-control custom-select">	
									<option value="">Select Category</option>
									@foreach($categories as $value)
									<option value="{{ $value->id }}" {{ ($service->category_id == $value->id)?'selected':'' }}> {{ $value->name }}</option>
									@endforeach
								</select>
							</div>
						</div>	
						
						<div class="row mb-2">
							<label for="state" class="col-sm-12 text-left control-label col-form-label">Status</label>
							<div class="col-sm-12">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" selected> Publish</option>
									<option value="0" > Private </option>
								</select>
							</div>
						</div>
						<div class="row mb-2">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link" >
									<img src="{{ (isset($service->featured_image))?getSizedImage('thumb',$service->featured_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="{{ $service->featured_image }}" >	
								</a>	
								@if(isset($service->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif
							</div>
						</div>
						<div class="row mb-2">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link" >
									<img src="{{ (isset($service->banner_image))?getSizedImage('thumb',$service->banner_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="banner_image" id="banner_image" value="{{ $service->banner_image }}" >	
								</a>	
								@if(isset($service->banner_image))
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
							<label for="title" class="col-sm-3 control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $service->title }}" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="meta_description" class="col-sm-3 control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $service->meta_description }}</textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="schema" class="col-sm-3 control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $service->schema }}</textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="utm_campaign" class="col-sm-3 control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $service->utm_campaign }}">
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="utm_source" class="col-sm-3 control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $service->utm_source }}">
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="robots" class="col-sm-3 control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="{{ $service->robots }}" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="canonical" class="col-sm-3 control-label col-form-label">Cronical Url</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter Center Pincode Here" value="{{ $service->canonical }}">
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="service_id" id="service_id" value="{{ $service->id }}" >
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



