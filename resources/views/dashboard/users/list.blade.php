<input type="hidden" id="gettoken" value="{{csrf_token()}}">
<div class="table-responsive">
	<table class="table align-items-center" id="dataTable">
		<thead class="thead-light">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Birthday</th>
				<th>Rol</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->phone}}</td>
				<td>{{$user->birthday}}</td>
				<td>
					@if(!empty($user->roles()))
				        @foreach($user->getRoleNames() as $v)
				           <label class="badge badge-success">{{ $v }}</label>
				        @endforeach
				    @endif
				</td>
				<td>{!!$user->activeButton()!!}</td>
				<td>
					<a href="{{route('users.show',$user->id)}}" title="Details" class="btn btn-info btn-circle btn-sm"><i class="fa fa-info fa-xs"></i></a>
					<a href="{{route('users.edit',$user->id)}}" title="Edit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit fa-xs"></i></a>
					<button data-model="user" data-url="{{route('users.destroy',$user->id)}}"
                  class="btn btn-sm btn-danger btn-circle btn-delete" 
                  title="Delete"><i class="fa fa-trash fa-xs"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
