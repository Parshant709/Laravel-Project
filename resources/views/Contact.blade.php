@extends('Layout.Enest')
@section('title','Contact')
@section('content')
<main>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row mt-4">
				@include('Categary')
			<div class="col-12 col-md-9 mb-3 ">
				<div class="col pt-3 pb-2 bg-light" style="font-weight: bold; font-size: 28px;">CONTACT US</div>
				<div class="row ">
					<div class="col border border-dark mt-2">
						<p class="t1">Customer service: 91852858959 <br>
						Ludhiana, Punjan, INDIA <br>
						Yorex Infotech.
						</p>
						<hr>
						<p class="t2">
							<span class="font-weight-bold">Contact Us</span><br>
							Have a question? We have 24*7 customer service. <br>
							Before you contact us, skim through our Self Serve options and Frequently Asked Question for quicker answers. <br>
							Want to know more about the status of your orders? <br>
							Login to view your order details.

						</p>
						<div class="col col-md-12 border border-dark mb-3 d">
							<div class="col-4 col-md-3 border border-dark cn">
								Contact Us
							</div>
								<form>
								<table class="mt-4">
										 <tr><td>Full Name:*</td><td><input class="form-control" type="text" name="name" /></td></tr>
										 <tr><td>Email Address:*</td><td><input class="form-control" type="email" /></td></tr>
										 <tr><td>Message:*</td><td><textarea class="form-control"></textarea></td></tr>
								</table>
								</div>
								</form>
						<button type="submit" class="btn btn-dark mb-5">Send Now</button>
					</div>
			  </div>
			</div>
		</div>
		
	</div>
</main>
@endsection