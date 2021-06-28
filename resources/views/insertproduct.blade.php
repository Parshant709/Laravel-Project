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
    <div class="alert alert-success alert-dismissible fade show">
      <p>{{session('message')}}</p>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-danger alert-dismissible fade show">
      <p>{{session('status')}}</p>
    </div>
@endif
  <form action="{{ url('/submit_pro')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group mt-5">
      <label for="catid">Categarie Id:</label><br>
      <input  class=" col col-md-6 form-control" name="catid" type="text"><br>
      <label for="name">Name:</label><br>
      <input  class=" col col-md-6 form-control" name="name" type="text"><br>
      <label for="price">Price:</label><br>
      <input  class=" col col-md-6 form-control" name="price" type="text"><br>
      <label for="quantity">Quantity:</label><br>
      <input  class=" col col-md-6 form-control" name="quantity" type="text"><br>
      <label for="image">Image:</label><br>
      <input  class=" col col-md-6 form-control" name="image" type="file"><br>
      <label for="spl">special</label><br>
      <input  class=" col col-md-6 form-control" name="spl" type="text"><br>

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



