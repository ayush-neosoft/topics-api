@extends('layouts.app')

@section('content')
	<div class="container">
		<h3 class="text-center">Users</h3>
		<table class="table table-striped table-hovered">
			<thead>
				<tr class="text-center">
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr class="text-center">
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at->format('jS M, Y H:i A') }}</td>
						<td>
							<button class="btn btn-sm btn-info" title="View Details"><i class="fas fa-eye"></i></button>
							<button class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></button>
							<button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
@endsection