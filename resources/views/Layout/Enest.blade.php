<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	<header>	
		<div class="container-fluid hd">
			<div class="container">
				<div class="row rowHeight">
					<div class="col-8 col-md-10 en">
						<h3><a href="{{ url('/') }}" style="text-decoration: none; color:#fff;">ENEST</a></h3>	
						<span>THE BIGGEST CHOICE ON WEB <a href="{{ url('/admin') }}">admin</a></span>
					</div>
					<div class="col-4 col-md-2 login align-self-center ">
						@if(!session()->has('data'))
						<a href="{{ url('/login') }}"><button class="btn btn-dark login">Log In</button></a>
						@else
						<a href="{{ url('/logout') }}"><button class="btn btn-dark login">Log Out</button></a>
						@endif
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				<div class="col-6 col-md-8 li navbar navbar-expand-lg" >
					<button class="navbar-toggler navbar-dark navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					
					<ul class="navbar-nav me-auto mb-2 mb-lg-2">
						<li class="nav-item"><a  class="nav-link" href="{{ url('/') }}">HOME</a></li>
						<li class="nav-item"><a  class="nav-link" href="{{ url('/newproducts') }}">NEW PRODUCTS</a></li>
						<li class="nav-item"><a  class="nav-link" href="{{ url('/special') }}">SPECIALS</a></li>
						<li class="nav-item"><a  class="nav-link" href="{{ url('/products') }}">ALL PRODUCTS</a></li>
						<li class="nav-item"><a  class="nav-link" href="#">REVIEWS</a></li>
						<li class="nav-item"><a  class="nav-link" href="{{ url('/contact') }}">CONTACTS</a></li>
						<li class="nav-item"><a  class="nav-link" href="{{ url('/faq') }}">FAQS</a></li>
					</ul>
					</div>
				</div>
				<div class="col-6 col-md-4" >
						<div class="row mb-3">
						<form action="/search" method="POST" class="d-flex">
							{{ csrf_field() }}
									<input class="form-control col-6 col-md-6 mr-3" name="search" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-light" type="submit">Search</button>
								</form>
						</div>
				</div>
				</div>
				</div>
		</div>
	</header>
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
{{-- Main Content Starts Here --}}
@yield('content')


<footer>
		<div class="container-fluid">
			<div class="container">
				<div class="row bg-light">
					<div class="col-6 col-md-8 fi mb-3 mt-3" >
						<ul>
							<a href="{{ url('/') }}">HOME</a>
							<a href="{{ url('/newproducts') }}">NEW PRODUCTS</a>
							<a href="{{ url('/special') }}">SPECIALS</a>
							<a href="{{ url('/products') }}">ALL PRODUCTS</a>
							<a href="#">REVIEWS</a>
							<a href="{{ url('/contact') }}">CONTACTS</a>
							<a href="{{ url('/faq') }}">FAQS</a>
						</ul>
						
					</div>
					<div class="col-6 col-md-4 align-self-end mb-3">
						copyright &copy 2021 
					</div>
				</div>
				
			</div>
		</div>
	</footer>
	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>



