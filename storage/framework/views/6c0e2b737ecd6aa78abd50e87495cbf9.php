<?php $__env->startSection('content'); ?>
<div class="container" style="padding:30px 15px; min-height:400px">
  <h3>Watchlist Saya</h3>
  <p class="text-muted">Film yang kamu simpan untuk ditonton nanti.</p>

  <div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <div class="col-sm-3 col-xs-6" style="margin-bottom:20px">
        <a href="<?php echo e(route('movies.show', $film)); ?>">
          <img src="<?php echo e($film->poster_url); ?>" alt="<?php echo e($film->title); ?>" style="width:100%; border-radius:4px">
          <p style="margin-top:6px"><?php echo e($film->title); ?> <small class="text-muted">(<?php echo e($film->year); ?>)</small></p>
        </a>
        <form action="<?php echo e(route('watchlist.toggle', $film)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i> Hapus</button>
        </form>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <div class="col-sm-12 text-center text-muted" style="padding:40px 0">
        Belum ada film yang disimpan. Yuk <a href="<?php echo e(route('movies')); ?>">cari film</a> dan simpan ke watchlist.
      </div>
    <?php endif; ?>
  </div>

  <?php echo e($films->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/watchlist/index.blade.php ENDPATH**/ ?>