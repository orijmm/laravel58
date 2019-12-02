<input type="hidden" id="gettoken" value="{{csrf_token()}}">
<div class="table-responsive content-table">
	<table class="table align-items-center" id="example">
		<thead class="thead-light">
			<tr>
				<th>name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Birthday</th>
				<th>Rol</th>
				<th>Status</th>
			</tr>
		</thead>
		<!-- <tbody>
			@foreach($data as $users)
			<tr>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>{{$users->phone}}</td>
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
					<button data-model="user" data-url="{{route('users.destroy',$users->id)}}"
                  class="btn btn-sm btn-danger btn-circle btn-delete" 
                  title="Delete"><i class="fa fa-trash fa-xs"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody> -->
	</table>
</div>
@push('scripts')
<script type="text/javascript">
	  $(document).ready(function() {
    $('#example').DataTable( {
        "ajax": '{{route("users.getusers")}}',
        aoColumns: [
            { mData: 'name' },
            { mData: 'email' },
            { mData: 'phone' },
            { mData: 'birthday' },
            { mData: 'roles.0.name' },
            { mData: 'active' }

        ],
    } );
} );
</script>
@endpush
