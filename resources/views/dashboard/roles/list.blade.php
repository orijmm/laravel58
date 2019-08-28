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
					<a href="#" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  	</a>
                  	<a href="{{route('roles.edit',$rol->id)}}" class="btn btn-warning btn-circle">
                    <i class="fa fa-edit"></i>
                  	</a>
					<a href="#" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                  </a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
