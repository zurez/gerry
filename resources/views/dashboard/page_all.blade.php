@extends('layout.admin')
@section('admincontent')
<table class="table table-striped" id="blog_all">
	<thead>
		<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pages as $b)
			<?php
				if ($b->published=="yes") {
					$state="publish";
				}else{
					$state="unpublish";
				}
			?>
			<tr>
				<td>{{$b->bid}}</td>
				<td>{{$b->title}}</td>
				<td>{{$b->display_name}}</td>
				<td>
					<a href="{{url('admin/blog/edit',$b->bid)}}" target="_blank" class="btn btn-primary">Edit</a>
					<button type="button" rel-id="{{$b->bid}}" action="delete" class="btn btn-danger edit">Delete</button>
					{{-- <button type="button" rel-id="{{$b->bid}}" action="{{$state}}" class="btn btn-warning edit">{{ucfirst($state)}}</button> --}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('#blog_all').DataTable();
		$('.edit').click(function(){
			var action=$(this).attr('action');
			var blog_id=$(this).attr('rel-id');
			// alert(action);
			var url="{{url('admin/action/blog')}}";
			$.ajax({
				url:url,
				type:'POST',
				data:{
					blog_id:blog_id,
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