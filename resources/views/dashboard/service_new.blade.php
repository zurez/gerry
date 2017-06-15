@extends('layout.admin')
@section('admincontent')
	<div class="row">
    <div class="col-md-12" style="display: block;">
    		<form class="form-horizontal" id="service">
				<fieldset>


				<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


				<!-- Form Name -->
		{{-- 		<legend>Form Name</legend> --}}

				<!-- Text input http://getbootstrap.com/css/#forms -->
				<div class="form-group">
				  <label for="title" class="control-label col-sm-2">Title</label>
				  <div class="col-sm-10">
				    <input class="form-control" name="title" id="title" required="required" type="text" value="{{$service->title or ''}}">
				    <p class="help-block">The title of your service.</p>
				  </div>
				</div>
				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="column1">Column 1</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="column1" name="column1" rows="7" required="required">{{$service->column1 or ''}}"</textarea>
				    <p class="help-block">The column 1 of the service page.</p>
				  </div>
				</div>

				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="column2">Column 2</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="column2" name="column2" rows="7" required="required" >"{{$service->column2 or ''}}"</textarea>
				    <p class="help-block">The column 2 of the service page.</p>
				  </div>
				</div>

				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="footer1">Footer 1</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="footer1" name="footer1" rows="7" required="required" >"{{$service->foot1 or ''}}"</textarea>
				    <p class="help-block">The footer 1 of the service page.</p>
				  </div>
				</div>

				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="footer2">Footer 2</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="footer2" name="footer2" rows="7" required="required">"{{$service->foot2 or ''}}"</textarea>
				    <p class="help-block">The footer 2 of the service page.</p>
				  </div>
				</div>

				<!-- File Button http://getbootstrap.com/css/#forms -->
				<div class="form-group">
				  <label for="service_logo" class="control-label col-sm-2">Service Logo</label>
				  <div class="col-sm-10">
				  <input id="service_logo" name="service_logo" required="required" type="file">
				  <p class="help-block">The logo for your service page.</p>
				  </div>
				</div>
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
				<!-- Button http://getbootstrap.com/css/#buttons -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="saveService">Save</label>
				  <div class="text-right col-sm-10">
				    <button type="button" id="service_save" name="saveService" class="btn btn-primary" aria-label="Save">Save</button>
				    <p class="help-block">Save your content</p>
				  </div>
				</div>


				</fieldset>
				</form>
				<input type="hidden" id="service_id" value="{{$service_id or '0'}}">

    </div>
</div>

<input type="hidden" value="{{$service_id or '0'}}" id="service_id">
	<script type="text/javascript">
		$(document).ready(function(){

			$('#service_save').click(function(){
				var url="{{url('admin/save/service')}}";
				var service_id=$('#service_id').val();
				formdata=new FormData();
				formdata.append('title',$('#title').val());
				formdata.append('column1',$('#column1').val());
				formdata.append('column2',$('#column2').val());
				formdata.append('footer1',$('#footer1').val());
				formdata.append('footer2',$('#footer2').val());
				formdata.append('imagefile',$('#service_logo')[0].files[0]);
				// formdata.append();
				// formdata.append();formdata.append();

				// data=$('#service').serialize();
				
				if (service_id==0) {
	
				}else{
					// data+="&service_id="+service_id;
					formdata.append('service_id',service_id);
				}
				
				// Ajax
				$.ajax({
					url:url,
					type:'POST',
					data:formdata,
		            contentType: false,
		            processData: false,
		   
		      
					success:function(r){
						alert(r.long_message);
					},
					error:function(){
						alert("Your service could not be saved.");
					}
				});
			});

		});
	</script>
@stop