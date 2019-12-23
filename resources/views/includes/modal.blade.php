<div id="modaldemo8" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">Respond Confirmation Box</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Please note that, After the confirmation either to accept or reject, you cannot revoke it back</strong>
                            </div>
            <div role="alert" id="msg4"></div>
            <form action="#" class="form-horizontal" method="POST" id="acceptform">
              <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
              <select class="form-control select2" name="status">
                <option value="1">Accept</option>
                <option value="2">Reject</option>
                </select>
              <input type="hidden" class="form-control" id="id_serve" value="{{$service->id}}">
               <input type="hidden" class="form-control" id="" name="_method" value="PUT">
               <br>
               <button type="submit" class = "btn btn-success btn-xs">Send Respond</button>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-indigo">Save changes</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          </div> -->
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->