@extends('layout.admin')
@section('admincontent')
<table class="table table-striped" id="case_all">
	<thead>
		<tr>
		<th>ID</th>
		<th>Title</th>
	
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pages as $b)

			<tr>
				<td>{{$b->id}}</td>
				<td>{{$b->title}}</td>
			
				<td>
					<a href="{{url('admin/case/edit',$b->id)}}" target="_blank" class="btn btn-primary">Edit</a>
					<button type="button" rel-id="{{$b->id}}" action="delete" class="btn btn-danger edit">Delete</button>
					{{-- <button type="button" rel-id="{{$b->bid}}" action="{{$state}}" class="btn btn-warning edit">{{ucfirst($state)}}</button> --}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('#case_all').DataTable();
		$('.edit').click(function(){
			var action=$(this).attr('action');
			var case_id=$(this).attr('rel-id');
			// alert(action);
			var url="{{url('admin/case/delete')}}";
			$.ajax({
				url:url,
				type:'POST',
				data:{
					case_id:case_id,
					action:action,
					_token:"{{csrf_token()}}"
				},
				success:function(r){alert(r.long_message);location.reload();},
				error:function(){alert("Your action could not be completed.");}
			});
		});
	});
</script>
@stop