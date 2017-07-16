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
  <input id="title" name="title" placeholder="eg: Survaider" class="form-control " required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Company's Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control input-md" id="description" name="description" cols="20" rows="15">Keep it short!</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="document">Downloadable PDF</label>
  <div class="col-md-4">
    <input id="document" name="document" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file">Images(Select Multiple)</label>
  <div class="col-md-4">
    <input id="file" name="file" class="input-file" type="file" multiple="multiple">
  </div>
</div>

<!-- Button -->

<input type="submit" value="Create" class="btn btn-primary pull-right">

</fieldset>
</form>
<p>&nbsp;</p>

@stop