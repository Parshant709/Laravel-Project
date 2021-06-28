
<?php $__env->startSection('title','All Products'); ?>
<?php $__env->startSection('content'); ?>
		

<main>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row mt-4">
				<?php echo $__env->make('Categary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="col-12 col-md-9 mb-3">
				<div class="col pt-3 pb-2 bg-light" style="font-weight: bold; font-size: 28px;">PRODUCTS NAME</div>
				<div class="col pt-3 pb-2 bg-light mt-2" style="font-weight: bold; font-size: 14px;">Sort by: </div>
				<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="row border border-dark mt-2">
					<div class="col col-md-3">
						<img src="<?php echo e(asset('upload_image/'.$pro->image)); ?>" alt="product" class="img-fluid" style=" height:30vh; width:100%;"><br><br>
						<div class="col border border-dark text-center" style="height:35px; padding-top: 8px;"> In stock : 988</div><br> <br>
						<label >Details:</label><br>
						<label class=" text-secondary mb-2"> <?php echo e($pro->name); ?></label>

					</div>
					<div class="col col-md-9">
            <h6 class="mt-3 mb-4 font-weight-bold">Date Added : <?php echo e($pro->created_at); ?></h6>
            <hr>
						<label class="font-weight-bold"><?php echo e($pro->name); ?></label><br>
						<span>Model: <?php echo e($pro->name); ?></span><br>
						<span>Manufacture: <?php echo e($pro->name); ?></span><br><br><br><br>
						<span class="text-secondary">RS.<?php echo e($pro->price); ?></span><br><br>
						<a href="/product/<?php echo e($pro->id); ?>" class="btn btn-dark mt-2 mb-3">BUY NOW</a>
					</div>
					
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<br>
				<?php echo e($prod->links()); ?>

				
			</div>
			</div>
		</div>
		
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Enest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOftWaRe\Xampp\htdocs\enestlaravel\resources\views/products.blade.php ENDPATH**/ ?>