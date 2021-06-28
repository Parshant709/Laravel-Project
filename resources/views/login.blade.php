@extends('Layout.Enest')
@section('title','LogIn')
@section('content')
<main>
	<div class="container-fluid">
		<div class="container mt-4 mb-4">
			<div class="row justify-content-center">
				<div class="col col-md-6 bg-light justify-content-between">
					<form action="/signin" method="post" >
						{{ csrf_field() }}
						<div class="text-center mb-3 mt-3"><h5 class="font-weight-bold">Login Here</h5></div>
						<div class="form-group row justify-content-center">
					    <label class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-5">
					     <input type="email" name="email" class="form-control" id="staticEmail" value="{{ old('email') }}" placeholder="Enter the Email">
					    </div>
					  </div>
					  <div class="form-group row justify-content-center mt-3">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-5">
					      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group row justify-content-center">
    					<div class="col-sm text-center mt-4 mb-3">
      						<button type="submit" class="btn btn-dark ">Sign in</button>
    					</div>
  						</div>
					</form>
				</div>
		</div>
		<div class="row justify-content-center mt-4">
				<div class="col col-md-6 bg-light justify-content-between">
					<form action="/signup" method="POST" >
						{{ @csrf_field() }}
						<div class="text-center mb-3 mt-3"><h5 class="font-weight-bold">New to Enest?<span style="font-size: 16px; color: gray;">Sign up </span> </h5></div>
						<div class="form-group row justify-content-center">
					    <label class="col-sm-3 col-form-label">Full Name</label>
					    <div class="col-sm-5">
					     <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
					    </div>
					  </div>
						<div class="form-group row justify-content-center">
					    <label class="col-sm-3 col-form-label">Email</label>
					    <div class="col-sm-5">
					     <input type="email" class="form-control" name="email" id="staticEmail" placeholder="Enter the email">
					    </div>
					  </div>
					  <div class="form-group row justify-content-center mt-3">
					    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
					    <div class="col-sm-5">
					      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group row justify-content-center">
    					<div class="col-sm text-center mt-4 mb-3">
      						<button type="submit" class="btn btn-dark ">Sign up</button>
    					</div>
  						</div>
					</form>
				</div>
		</div>
	</div>
</main>
@endsection
