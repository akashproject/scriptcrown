@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($services)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($services) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap mb-3" >
					<div class="dt-buttons btn-group flex-wrap mb-0">
						<a class="btn create-new btn-primary" href="{{ route('admin-add-service') }} ">
							<span>
								<span class="d-flex align-items-center gap-2">
									<i class="icon-base bx bx-plus icon-sm"></i> 
									<span class="d-none d-sm-inline-block">Add New Record</span>
								</span>
							</span>
						</a> 
					</div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table id="zero_config" class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Status</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($services as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>{{ $value->status }}</td>													
								<td>
									<div class="d-inline-block text-nowrap">
										<a href="{{ route('view-services',$value->slug) }}" class="btn btn-sm btn-icon">
											<i class="bx bx-show"></i>
										</a>
										@can('update')
										<a href="{{ route('admin-show-service',$value->id) }}" class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></a>
										@endcan
										@can('delete')
										<a href="{{ route('admin-delete-service',$value->id) }}" onclick="return confirm('Are you sure?')"; class="btn btn-sm btn-icon delete-record">
											<i class="bx bx-trash"></i>
										</a>
										@endcan
										<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded me-2"></i>
										</button>
									</div>
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	@endif
</div>                   
@endsection
@section('script')
@endsection



