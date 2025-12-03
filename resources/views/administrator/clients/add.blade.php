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
							<label for="rating" class="col-sm-3 text-right control-label col-form-label">Rating</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="rating" id="rating" placeholder="Enter Source Here" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="source" id="source" placeholder="Enter Source Here" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="video_link" class="col-sm-3 text-right control-label col-form-label">Video Link</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="video_link" id="video_link" placeholder="Enter Source Here" >
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="mceEditor" placeholder="Enter Description Here" ></textarea>
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
					<input type="hidden" name="faq_id" id="faq_id" value="" >
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