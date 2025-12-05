@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-testimonial') }}" enctype="multipart/form-data">
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
							<label for="rating" class="col-sm-3 text-right control-label col-form-label">Rating</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="rating" id="rating" placeholder="Enter Source Here" value="{{ $testimonial->rating }}" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="source" id="source" placeholder="Enter Source Here" value="{{ $testimonial->source }}" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="video_link" class="col-sm-3 text-right control-label col-form-label">Video Link</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="video_link" id="video_link" placeholder="Enter Source Here" value="{{ $testimonial->video_link }}" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="mceEditor" placeholder="Enter Description Here" >{{ $testimonial->description }}</textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4" >
						<div class="row mb-2">
							<label for="client_id" class="col-sm-3 text-left control-label col-form-label">Client</label>
							<div class="col-sm-9">
								<select name="client_id" id="client_id" class="select2 form-control custom-select">	
									<option value="">Select Client</option>
									@foreach(getClients() as $value)
									<option value="{{ $value->id }}" {{ ($testimonial->client_id == $value->id)?'selected':'' }}>{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>	
						<div class="row mb-2">
							<label for="project_id" class="col-sm-3 text-left control-label col-form-label">Project</label>
							<div class="col-sm-9">
								<select name="project_id" id="project_id" class="select2 form-control custom-select">	
									<option value="">Select Project</option>
									@foreach(getProjects() as $value)
									<option value="{{ $value->id }}" {{ ($testimonial->project_id == $value->id)?'selected':'' }}>{{ $value->name }}</option>
									@endforeach
								<select>
							</div>
						</div>	
					</div>
				</div>
				<h4 class="card-title"> Search Engine Options </h4>
				<div class="row">
					<div class="col-md-8" >
						<div class="form-group row mb-2">
							<label for="meta_title" class="col-sm-3 control-label col-form-label">Meta Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Title Here" value="{{ $testimonial->meta_title }}" >
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="meta_description" class="col-sm-3 control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $testimonial->meta_description }}</textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="schema" class="col-sm-3 control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $testimonial->schema }}</textarea>
							</div>
						</div>
						<div class="form-group row mb-2">
							<label for="utm_campaign" class="col-sm-3 control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $testimonial->utm_campaign }}">
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="utm_source" class="col-sm-3 control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $testimonial->utm_source }}">
							</div>
						</div>

						<div class="form-group row mb-2">
							<label for="robots" class="col-sm-3 control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="{{ $testimonial->robots }}" >
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="testimonial_id" id="testimonial_id" value="{{ $testimonial->id }}" >
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

