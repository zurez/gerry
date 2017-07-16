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
  
    <tr class="clickable-row" rel-msg="{{$e->message}}" >
      
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td><strong>{{$e->name}}</strong></td>
      <td><strong>{{$e->phone}}</strong></td>
      <td><strong>{{$e->email}}</strong></td>
      <td><strong>{{$e->created_at}}</strong></td>
      
    </tr>
 
    @endforeach
  </tbody>
</table>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Message</h4>
      </div>
      <div class="modal-body">
        <p id="modal_e_message"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#emails').DataTable();
    $(".clickable-row").click(function() {
      var message=$(this).attr('rel-msg');
      $('#modal_e_message').text(message);
      $('#myModal').modal('show');
        // window.location = $(this).data("href");

    });
  });
</script>
@stop