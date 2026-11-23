<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<h2 style="margin-top:0">Dashboard</h2>
<p class="text-muted">Selamat datang, <?php echo e(auth()->user()->name); ?>.</p>

<div class="row">
  <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-2 col-sm-4 col-xs-6">
      <a href="<?php echo e(route($stat['route'])); ?>" class="stat-card bg-<?php echo e($stat['color']); ?>-c">
        <i class="fa <?php echo e($stat['icon']); ?>"></i>
        <div class="num"><?php echo e($stat['total']); ?></div>
        <div><?php echo e($label); ?></div>
      </a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="row">
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Film terbaru</strong> <a href="<?php echo e(route('admin.films.create')); ?>" class="btn btn-xs btn-primary pull-right">+ Tambah</a></div>
      <table class="table table-striped">
        <thead><tr><th>Poster</th><th>Judul</th><th>Tahun</th><th>Genre</th></tr></thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $latestFilms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <td><img src="<?php echo e($film->poster_url); ?>" class="poster-thumb" alt=""></td>
            <td><?php echo e($film->title); ?></td>
            <td><?php echo e($film->year); ?></td>
            <td><?php echo e($film->genre->name ?? '-'); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tr><td colspan="4" class="text-center text-muted">Belum ada film.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><strong>Kritik terbaru</strong></div>
      <table class="table table-striped">
        <thead><tr><th>User</th><th>Film</th><th>Rating</th><th>Komentar</th></tr></thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $latestKritiks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kritik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <td><?php echo e($kritik->user->name ?? '-'); ?></td>
            <td><?php echo e($kritik->film->title ?? '-'); ?></td>
            <td><?php echo e($kritik->rating); ?>/5</td>
            <td><?php echo e(\Illuminate\Support\Str::limit($kritik->comment, 60)); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tr><td colspan="4" class="text-center text-muted">Belum ada kritik.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-md-5">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Jumlah film per genre</strong></div>
      <table class="table table-condensed">
        <tbody>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr><td><?php echo e($genre->name); ?></td><td class="text-right"><span class="badge"><?php echo e($genre->films_count); ?></span></td></tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>