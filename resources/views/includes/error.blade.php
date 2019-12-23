@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
           <h5>You have One or More Error Messages</h5>
        </strong>
    </div>
@endif

@if(Session::has('user_inserted'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
           <h5>{{session('user_inserted')}}</h5>
        </strong>
    </div>
@elseif(Session::has('user_not_inserted'))
	<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
           <h5>{{session('user_not_inserted')}}</h5>
        </strong>
    </div>
@endif

@if(Session::has('deleted_user'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
           <h5>{{session('deleted_user')}}</h5>
        </strong>
    </div>
@endif