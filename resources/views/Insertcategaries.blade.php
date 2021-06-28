<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>Login</title>
</head>
<body>
   <div class="container">
    @if(session('message'))
    <div class="alert alert-success">
      <p>{{session('message')}}</p>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-danger">
      <p>{{session('status')}}</p>
    </div>
@endif
  <form action="{{ url('/form-submit')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">                                                                            
      <label for="CatName">Categarie Name</label><br>
      <input  class=" col col-md-6 form-control" name="name" type="text"><br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  
  </form>
</div>
</body>
<!-- Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</html>



