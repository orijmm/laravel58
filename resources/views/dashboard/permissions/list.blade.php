<input type="hidden" id="gettoken" value="{{csrf_token()}}">
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Permission</th>
      @foreach($roles as $role)
      <th>{{$role->name}}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
  	@foreach($permissions as $permission)
    <tr>
      <th scope="row">{{$permission->name}} <a href="javascript: void(0)" data-model="permission" data-url="{{route('permissions.destroy',$permission->id)}}"
                  class="btn-delete text-danger" 
                  title="Delete"><i class="fa fa-times fa-xs"></i></a></th>
      @foreach($roles as $role)
      <td>
      	<div class="checkbox">
      		{{Form::checkbox("roles[{$role->id}][]",$permission->id,$role->hasPermissionTo($permission->name))}}
      	</div>
      </td>
      @endforeach
    </tr>
    @endforeach
  </tbody>
</table>
