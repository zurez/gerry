@extends('layout.admin')
<?php 
$ignore=["created_at","deleted_at","id","updated_at","landing_image"];
?>
@section('admincontent')
	
	@if(isset($form_data))
		{!! Form::open(array('url'=>'admin/settings/site','class'=>'form','files'=>true)) !!}
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
				<label>Landing Image</label>
			</div>
			<div class="col-sm-6">
				<input type="file" name="landing_image">
			</div>
		</div>
		<input type="submit" name="" class="btn-primary" value="Update">
	@endif

@stop