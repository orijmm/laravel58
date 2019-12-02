<input type="hidden" id="gettoken" value="{{csrf_token()}}">
<div class="table-responsive content-table">
	<table class="table align-items-center" id="dataTable">
		<thead class="thead-light">
			<tr>
				<th>Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roles as $rol)
			<tr>
				<td>{{$rol->name}}</td>
				<td>
					<a href="{{route('roles.show',$rol->id)}}" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  	</a>
                  	<a href="{{route('roles.edit',$rol->id)}}" class="btn btn-warning btn-circle">
                    <i class="fa fa-edit"></i>
                  	</a>
					<button data-model="role" data-url="{{route('roles.destroy',$rol->id)}}"
                  class="btn btn-sm btn-danger btn-circle btn-delete" 
                  title="Delete"><i class="fa fa-trash fa-xs"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
