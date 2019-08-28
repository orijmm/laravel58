<div class="table-responsive content-table">
	<table class="table align-items-center" id="dataTable">
		<thead class="thead-light">
			<tr>
				<th>name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Birthday</th>
				<th>Rol</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $users)
			<tr>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>{{$users->phone}}</td>
				<td>{{$users->address}}</td>
				<td>{{$users->birthday}}</td>
				<td>
					@if(!empty($users->roles()))
				        @foreach($users->getRoleNames() as $v)
				           <label class="badge badge-success">{{ $v }}</label>
				        @endforeach
				    @endif
				</td>
				<td>{!!$users->activeButton()!!}</td>
				<td>
					<a href="{{route('users.show',$users->id)}}" title="Details" class="btn btn-info btn-circle btn-sm"><i class="fa fa-info fa-xs"></i></a>
					<a href="{{route('users.edit',$users->id)}}" title="Edit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit fa-xs"></i></a>
					<button 
                  class="btn btn-sm btn-danger btn-circle btn-delete" 
                  title="Delete"><i class="fa fa-trash fa-xs"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
