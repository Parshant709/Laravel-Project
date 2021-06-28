@extends('Layout.Enest')
@section('title','All Products')
@section('content')
		

<main>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row mt-4">
				@include('Categary')
			<div class="col-12 col-md-9 mb-3">
				<div class="col pt-3 pb-2 bg-light" style="font-weight: bold; font-size: 28px;">PRODUCTS NAME</div>
				<div class="col pt-3 pb-2 bg-light mt-2" style="font-weight: bold; font-size: 14px;">Sort by: </div>
				@foreach($prod as $pro)
				<div class="row border border-dark mt-2">
					<div class="col col-md-3">
						<img src="{{ asset('upload_image/'.$pro->image) }}" alt="product" class="img-fluid" style=" height:30vh; width:100%;"><br><br>
						<div class="col border border-dark text-center" style="height:35px; padding-top: 8px;"> In stock : 988</div><br> <br>
						<label >Details:</label><br>
						<label class=" text-secondary mb-2"> {{ $pro->name }}</label>

					</div>
					<div class="col col-md-9">
            <h6 class="mt-3 mb-4 font-weight-bold">Date Added : {{ $pro->created_at }}</h6>
            <hr>
						<label class="font-weight-bold">{{ $pro->name }}</label><br>
						<span>Model: {{ $pro->name }}</span><br>
						<span>Manufacture: {{ $pro->name }}</span><br><br><br><br>
						<span class="text-secondary">RS.{{ $pro->price }}</span><br><br>
						<a href="/product/{{ $pro->id }}" class="btn btn-dark mt-2 mb-3">BUY NOW</a>
					</div>
					
				</div>
				@endforeach
				<br>
				{{ $prod->links() }}
				
			</div>
			</div>
		</div>
		
	</div>
</main>
@endsection