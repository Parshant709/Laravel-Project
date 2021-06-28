<div class="col-md-8 m-auto d-block" style="padding-top:40px;">
    @if(session('message'))
      <div class="alert alert-success">
        <p>{{ session('message') }}</p>
      </div>
    @endif
    @if(session('status'))
      <div class="alert alert-danger">
        <p>{{ session('status') }}</p>
      </div>
    @endif
    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
</div>