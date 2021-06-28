@extends('Layout.Enest')
@section('title','Product')
@section('content')
<main>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row mt-4">
				@include('Categary')
			<div class="col-12 col-md-9 mb-3">
				
				<filedset>
					<legend style="font-weight: bold; font-size: 28px;">PRODUCT'S NAME</legend>
				<div class="row border border-dark mt-2">
					<div class="col col-md-3">
						<img src="{{ asset('upload_image/'.$pro->image) }}" alt="product" class="img-fluid" style=" height:30vh; width:100%;"><br><br>
						<div class="col border border-dark text-center" style="height:35px; padding-top: 8px;"> In stock : {{ $pro->quantity }}</div><br> <br>
						<label >Details:</label><br>
						<label class=" text-secondary mb-5">{{ $pro->name }}</label>

					</div>
					<div class="col col-md-9">
						<h4 class="mt-3 mb-4 font-weight-bold">{{ $pro->name }}</h4>
						<span>Model: {{ $pro->name }}</span><br>
						<span>Manufacture: {{ $pro->name }}</span><br><br>
						Enter quality <input type="text"><br>
						<span class="text-secondary">RS.{{ $pro->price }}</span><br><br>
						<button class="btn btn-dark">Add to Cart</button><br>
						<a href="/checkout" class="btn btn-dark mt-2"> Check Out</a>
						{{-- <button class="btn btn-dark mt-2">Check Out</button> --}}
				

					</div>
				</div>
				</filedset>

				<fieldset>
				<div class="row">
					<div class="col col-md border border-dark mt-1">
						<table>
							<tr><td>Enter Name:</td><td><input class="form-control" type="text"  name="EN"></td></tr>
							<tr><td>Enter Email:</td><td><input class="form-control" type="text" name="EM"></td></tr>
							<tr><td>Enter Review:</td><td><textarea class="form-control" name="txt" cols="23" rows="10"></textarea></td></tr>
							<tr><td>Rating</td><td><input class="form-control" type="text" name="Ra"></td></tr>
							<tr><td><button class="mb-3 btn btn-dark">Submit Query</button></td></tr>
						</table>	

					</div>
				</div>
			</fieldset>
			</div>
			</div>
		</div>
		
	</div>
</main>
@endsection