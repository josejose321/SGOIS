<form action="" method="POST">
  @csrf
<div class="modal fade" id="announceModal" tabindex="-1" role="dialog" aria-labelledby="announceLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4 font-weight-bold" id="announceLabel">Compose an Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Subject">
        </div>
        
        <div class="form-group">
          <label for="textArea">Input Details Here</label>
          <textarea class="form-control" id="textArea" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>


<script>
    
  $('#announce').on('click',function(e){
      $('#announceModal').modal();
  });
  
</script>