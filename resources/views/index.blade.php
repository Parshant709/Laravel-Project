@extends('Layout.Enest')
@section('title','ENEST')

@section('content')	
<main>
	<div class="container-fluid mb-3">
		<div class="container">
			<img src="\images\main.png" alt="Main image is here" class="img-fluid img" style="width:100%;">
		</div> 
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				@include('Categary')
			<div class="col-12 col-md-9">
				<div class="col pt-3 pb-2 d-block f1" >FEATURED PRODUCTS</div>
				<div class="row">
					@foreach($prod as $pro)
					<div class="col-sm-12 col-md-4 border p-1">
						<div class="col"><img src="{{ asset('upload_image/'.$pro->image) }}" class="img-fluid mx-auto d-block" alt="Product1"></div>
						<div class="col"><label style="font-weight: bold;">{{ $pro->name }}</label><br>
						<label class="text-gray-dark">RS.{{ $pro->price }} </label></div>
						<hr class="m-0">
						<img src="/images/cart.png" class="mt-2 mb-2" style="height: 45px; width: 125px" alt=""><a href="/product/{{ $pro->id }}"class="btn btn-light mr-2">Add to cart</a>
					</div>
					@endforeach
				</div>
				
			</div>
			</div>
		</div>
		
	</div>
</main>

	@endsection
