<div class="col-12 col-md-3">
  <ul class="list-group "> 
    <li class="list-group-item bg-dark" style="color: white; font-weight: bold; font-size: 18px;">
    CATEGORIES</li>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/catp/<?php echo e($cat->id); ?>" class="list-group-item text-dark"><?php echo e($cat->name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </ul>
</div>
<?php /**PATH E:\SOftWaRe\Xampp\htdocs\enestlaravel\resources\views/Categary.blade.php ENDPATH**/ ?>