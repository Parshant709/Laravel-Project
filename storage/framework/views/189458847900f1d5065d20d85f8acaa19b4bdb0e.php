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
    <?php if(session('message')): ?>
    <div class="alert alert-success">
      <p><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>
<?php if(session('status')): ?>
    <div class="alert alert-danger">
      <p><?php echo e(session('status')); ?></p>
    </div>
<?php endif; ?>
  <form action="<?php echo e(url('/form-submit')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

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



<?php /**PATH E:\SOftWaRe\Xampp\htdocs\enestlaravel\resources\views/Insertcategaries.blade.php ENDPATH**/ ?>