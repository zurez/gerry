@extends('layout.admin')
<?php 
$ignore=["created_at","deleted_at","id","updated_at","landing_image"];
?>
@section('admincontent')
	
	{!! Form::open(['files'=>true,'url'=>'admin/case/save','class'=>'form-horizontal']) !!}
{{-- <form class="form-horizontal"> --}}
<fieldset>

<!-- Form Name -->
{{-- <legend>Form Name</legend> --}}

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Company Name</label>  
  <div class="col-md-5">
  <input id="title" name="title" value="{{$case->title or ''}}" class="form-control " required="" type="text">
    
  </div>
</div>
<div class="form-group" style="position: static;">
    <label for="blog_title">Custom URL</label>
   
    <input class="form-control" id="custom_url" value="{{$case->custom_url or 'Enter a url f..'}}" type="text" name="custom_url">
    <p class="help-block">Should be unique,without space and all lower caps.</p>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Company's Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control input-md" id="description" name="description" cols="20" rows="15">{{$case->description or ''}}</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="document">Downloadable PDF</label>
  <div class="col-md-4">
    <input id="document" name="document" class="input-file" type="file">
  </div>
</div>
<input type="hidden" id="case_id" value="{{$case->id or '0'}}" name="case_id">
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file">Images(Select Multiple)</label>
  <div class="col-md-4">
    <input id="file" name="file[]" class="input-file" type="file" multiple="multiple">
  </div>
</div>

<!-- Button -->

<input type="submit" value="Save" class="btn btn-primary pull-right">

</fieldset>
</form>
<p>&nbsp;</p>

@stop