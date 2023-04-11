@if(session()->has('message'))
<div class="alert alert-success" role="alert">
    <div class="d-flex justify-content-between">
        <h4 class="alert-heading m-auto">{{ session('message') }}</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </div>
  </div>
@endif
