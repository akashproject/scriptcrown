@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($leads)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($leads) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
					<div class="position-relative">
						<a href="{{ route('admin-add-lead') }}" class="btn btn-secondary add-new btn-primary" tabindex="0">
							<span>
								<i class="bx bx-plus me-0 me-sm-1"></i>
								<span class="d-none d-sm-inline-block">Add New Record</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Company Name</th>
								<th>Service</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($leads as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->company_name }}</td>													
								<td>{{ $value->service_name }}</td>													
								<td>
									<div class="d-inline-block text-nowrap">
										@can('update')
										<a href="{{ route('admin-show-lead',$value->id) }}" class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></a>
										@endcan
										@can('delete')
										<a href="{{ route('admin-delete-lead',$value->id) }}" onclick="return confirm('Are you sure?')"; class="btn btn-sm btn-icon delete-record">
											<i class="bx bx-trash"></i>
										</a>
										@endcan
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
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection