@extends('layout.admin')
@section('admincontent')
	<div class="row">
    <div class="col-md-12" style="display: block;">
        <div class="form-group" style="position: static;">
            <label for="service_title">Service Title</label>
            <input class="form-control" id="service_title" value="{{$service->title or 'Enter a title for your service..'}}" type="text">
            <p class="help-block">Should be short and concise.</p>
        </div>
        <div class="form-group" style="position: static;">
         	<div id="summernote">{!! $content or 'Write a new service' !!}</div>
        </div>
        <div class="checkbox" style="position: static;">
            <label>
                <input id="service_publish" type="checkbox" @if(isset($service_id)) checked="checked"@endif> <span>Publish</span>

            </label>
        </div>
        <div class="form-group" style="position: static;">
            <label for="service_image">Image</label>
            <input id="service_image" type="file" required="required">
            <p class="help-block">This image would represent your service.</p>
        </div>
        <div class="form-group" style="padding-right: 20px; position: static;">
            <button type="button" class="btn btn-primary" id="service_save">Save</button>
        </div>
    </div>
</div>

<input type="hidden" value="{{$service_id or '0'}}" id="service_id">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#summernote').summernote({
				  height: 300,                 // set editor height
				  minHeight: null,             // set minimum height of editor
				  maxHeight: null,             // set maximum height of editor
				  focus: true                  // set focus to editable area after initializing summernote
			});
			$('#service_save').click(function(){
				var url="{{url('admin/save/service')}}";
				var MyDiv2 = document.getElementsByClassName('note-editable');; m = MyDiv2[0];
				var content=$('#summernote').eq(0).summernote('code');
				var description=m.innerHTML;
				
				var title=$('#service_title').val();
				var publish=0;
				var imagefile=$('#service_image')[0].files[0];

				if ($('#service_publish').attr('checked')) {
					publish=1;
				}
				var service_id=$('#service_id').val();
				var formdata=new FormData();
				formdata.append('content',content);
				formdata.append('title',title);
				formdata.append('published',publish);
				formdata.append('imagefile',imagefile);
				formdata.append('description',description);
				formdata.append('_token',"{{csrf_token()}}");
				if (service_id==0) {
	
				}else{
			
					formdata.append('service_id',service_id);
				console.log(formdata);
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