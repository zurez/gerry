@extends('layout.admin')
@section('admincontent')
	<div class="row">
    <div class="col-md-12" style="display: block;">
    		<form class="form-horizontal" id="page">
				<fieldset>


				<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


				<!-- Form Name -->
		{{-- 		<legend>Form Name</legend> --}}

				<!-- Text input http://getbootstrap.com/css/#forms -->
				<div class="form-group">
				  <label for="title" class="control-label col-sm-2">Title</label>
				  <div class="col-sm-10">
				    <input class="form-control" name="title" id="title" required="required" type="text" value="{{$page->title or ''}}">
				    <p class="help-block">Please enter a descriptive title.</p>
				  </div>
				</div>

				<div class="form-group" >
			    <label for="custom_url" class="control-label col-sm-2">Custom URL</label>
			   <div class="col-sm-10">
			    <input class="form-control" id="custom_url" value="{{$page->custom_url or 'Enter a url ..'}}" type="text" name="custom_url">
			    <p class="help-block">Should be unique,without space and all lower caps.</p>
			    </div>
			</div>
				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="short_desc">Short Description</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="short_desc" name="short_desc" rows="7" required="required">{{$page->short_desc or ''}}"</textarea>
				    <p class="help-block">Type in a  short description.</p>
				  </div>
				</div>

				<!-- Textarea http://getbootstrap.com/css/#textarea -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="long_desc">Long Description</label>
				  <div class="col-sm-10">
				    <textarea class="form-control" id="long_desc" name="long_desc" rows="7" required="required" >"{{$page->long_desc or ''}}"</textarea>
				    <p class="help-block">Type in a long description</p>
				  </div>
				</div>

	

				<!-- File Button http://getbootstrap.com/css/#forms -->
				<div class="form-group">
				  <label for="logo" class="control-label col-sm-2">Logo</label>
				  <div class="col-sm-10">
				  <input id="logo" name="logo" required="required" type="file">
				  <p class="help-block">The logo for your  page.</p>
				  </div>
				</div>
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
				<input type="hidden" name="category" id="category" value="{{$category or 'none'}}">
				<!-- Button http://getbootstrap.com/css/#buttons -->
				<div class="form-group">
				  <label class="control-label col-sm-2" for="saveService">Save</label>
				  <div class="text-right col-sm-10">
				    <button type="button" id="save" name="saveService" class="btn btn-primary" aria-label="Save">Save</button>
				    <p class="help-block">Save your content</p>
				  </div>
				</div>


				</fieldset>
				</form>
				<input type="hidden" id="page_id" value="{{$page_id or '0'}}">

    </div>
</div>

{{-- <input type="hidden" value="{{$page_id or '0'}}" id="page_id"> --}}
	<script type="text/javascript">
		$(document).ready(function(){

			$('#save').click(function(){
				var url="{{url('admin/page/save')}}";
				var page_id=$('#page_id').val();
				formdata=new FormData();
				formdata.append('title',$('#title').val());
				formdata.append('short_desc',$('#short_desc').val());
				formdata.append('long_desc',$('#long_desc').val());
				formdata.append('category',$('#category').val());
				// formdata.append('footer2',$('#footer2').val());
				formdata.append('logo',$('#logo')[0].files[0]);
				// formdata.append();
				// formdata.append();formdata.append();

				// data=$('#service').serialize();
				
				if (page_id==0) {
	
				}else{
					// data+="&page_id="+page_id;
					formdata.append('page_id',page_id);
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
						alert("Your page could not be saved.");
					}
				});
			});

		});
	</script>
@stop