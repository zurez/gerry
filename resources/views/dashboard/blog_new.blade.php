@extends('layout.admin')
@section('admincontent')
	<div class="row">
    <div class="col-md-12" style="display: block;">
        <div class="form-group" style="position: static;">
            <label for="blog_title">Blog Title</label>
            <input class="form-control" id="blog_title" value="{{$blog->title or 'Enter a title for your blog..'}}" type="text">
            <p class="help-block">Should be short and concise.</p>
        </div>
        <div class="form-group" style="position: static;">
         	<div id="summernote">{!! $blog->content or 'Write your blog here..' !!}</div>
        </div>
        <div class="checkbox" style="position: static;">
            <label>
                <input id="blog_publish" type="checkbox"> <span>Publish</span>

            </label>
        </div>
        <div class="form-group" style="position: static;">
            <label for="blog_image">Image</label>
            <input id="blog_image" type="file" required="required">
            <p class="help-block">This image would represent your blog.</p>
        </div>
        <div class="form-group" style="padding-right: 20px; position: static;">
            <button type="button" class="btn btn-primary" id="blog_save">Save</button>
        </div>
    </div>
</div>

<input type="hidden" value="{{$blog_id or '0'}}" id="blog_id">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#summernote').summernote({
				  height: 300,                 // set editor height
				  minHeight: null,             // set minimum height of editor
				  maxHeight: null,             // set maximum height of editor
				  focus: true                  // set focus to editable area after initializing summernote
			});
			$('#blog_save').click(function(){
				var url="{{url('admin/save/blog')}}";
				var content=$('.summernote').eq(0).summernote('code');
				var title=$('#blog_title').val();
				var publish=0;
				var imagefile=$('#blog_image')[0].files[0];

				if ($('#blog_publish').attr('checked')) {
					publish=1;
				}
				var blog_id=$('#blog_id').val();
				var formdata=new FormData();
				formdata.append('content',content);
				formdata.append('title',title);
				formdata.append('published',publish);
				formdata.append('imagefile',imagefile);
				formdata.append('_token',"{{csrf_token()}}");
				if (blog_id==0) {
	
				}else{
			
					formdata.append('blog_id',blog_id);
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
						alert("Your blog could not be saved.");
					}
				});
			});

		});
	</script>
@stop