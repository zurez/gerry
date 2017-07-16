@extends('layout.admin')
@section('admincontent')
	{!! Form::open(['url'=>'admin/send/mail','files'=>true]) !!}
	<table class="table">
		<tr>
			<td>Address File(CSV Format Only)</td>
			<td>
				<input type="file" name="csv">
			</td>
		</tr>
		<tr>
			<td>Subject Line</td>
			<td><input type="text" name="subject" class="form-control"></td>
		</tr>
		<tr>
			<td>Email Body</td>
			<td><textarea name="body" class="form-control" rows="15"></textarea></td>
		</tr>
		</table>
		<input type="submit" class="btn btn-primary pull-right" value="Send">
	</form>

@stop