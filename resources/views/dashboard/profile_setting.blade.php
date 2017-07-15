@extends('layout.admin')
<?php 
$ignore=["created_at","deleted_at","id","updated_at","display_pic","is_admin","user_id"];
?>
@section('admincontent')
	
	@if(isset($form_data))
		{!! Form::open(array('url'=>'admin/settings/profile','class'=>'form','files'=>true)) !!}
		@foreach($form_data as $fd=>$value)
		@if(!in_array($fd,$ignore))
		<div class="row">
			<div class="col-sm-4">
				<label> {{ucfirst($fd)}}</label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="{{$fd}}" class="form-control" value="{{$value}}">
			</div>
		</div>
		@endif
		@endforeach
		<div class="row">
			<div class="col-sm-4">
				<label>Profile Picture</label>
			</div>
			<div class="col-sm-6">
				<input type="file" name="display_pic">
			</div>
		</div>
		<input type="submit" name="" class="btn-primary" value="Update">
	@endif

@stop