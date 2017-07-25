@extends('layout.admin')
@section('admincontent')
<table class="table table-striped" id="page_all">
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
				<td>{{$b->bid}}</td>
				<td>{{$b->title}}</td>
			
				<td>
					<a href="{{url('admin/page/edit',$b->bid)}}" target="_blank" class="btn btn-primary">Edit</a>
					<button type="button" rel-id="{{$b->bid}}" action="delete" class="btn btn-danger edit">Delete</button>
					{{-- <button type="button" rel-id="{{$b->bid}}" action="{{$state}}" class="btn btn-warning edit">{{ucfirst($state)}}</button> --}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('#page_all').DataTable();
		$('.edit').click(function(){
			var action=$(this).attr('action');
			var page_id=$(this).attr('rel-id');
			// alert(action);
			var url="{{url('admin/page/delete')}}";
			$.ajax({
				url:url,
				type:'POST',
				data:{
					page_id:page_id,
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