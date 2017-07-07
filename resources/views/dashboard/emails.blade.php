@extends('layout.admin')
@section('admincontent')
<style type="text/css">
  .clickable-row{
    cursor: hand;
    cursor: pointer;
  }
</style>
<table class="table table-condensed table-hover" id="emails">
  <thead>
    <tr>
      <th class="span1"><input type="checkbox"></th>
      <th class="span2">From</th>
      <th class="span2">Contact</th>
      <th class="span9">Email</th>
      <th class="span2">Received On</th>
    </tr>
  </thead>
  <tbody>
    @foreach($emails as $e)
  
    <tr class="clickable-row" href="{{url('admin/read/inbound',$e->id)}}">
      
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td><strong>{{$e->name}}</strong></td>
      <td><strong>{{$e->phone}}</strong></td>
      <td><strong>{{$e->email}}</strong></td>
      <td><strong>{{$e->created_at}}</strong></td>
      
    </tr>
 
    @endforeach
  </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function(){
    $('#emails').DataTable();
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });
</script>
@stop