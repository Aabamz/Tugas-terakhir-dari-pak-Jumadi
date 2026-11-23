<?php $__env->startSection('title', 'Data Film'); ?>

<?php $__env->startSection('content'); ?>
<div class="clearfix">
  <h2 class="pull-left" style="margin-top:0">Data Film</h2>
  <a href="<?php echo e(route('admin.films.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Film</a>
</div>

<form method="GET" class="form-inline" style="margin-bottom:15px">
  <input type="text" name="q" value="<?php echo e(request('q')); ?>" class="form-control" placeholder="Cari judul...">
  <button class="btn btn-default"><i class="fa fa-search"></i></button>
</form>

<div class="panel panel-default">
  <table class="table table-striped table-hover">
    <thead><tr><th>#</th><th>Poster</th><th>Judul</th><th>Tahun</th><th>Genre</th><th width="130">Aksi</th></tr></thead>
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($films->firstItem() + $loop->index); ?></td>
        <td><img src="<?php echo e($film->poster_url); ?>" class="poster-thumb" alt=""></td>
        <td><?php echo e($film->title); ?></td>
        <td><?php echo e($film->year); ?></td>
        <td><?php echo e($film->genre->name ?? '-'); ?></td>
        <td>
          <a href="<?php echo e(route('admin.films.edit', $film)); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
          <form action="<?php echo e(route('admin.films.destroy', $film)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus film ini?')">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr><td colspan="6" class="text-center text-muted">Tidak ada data.</td></tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>
<?php echo e($films->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/admin/films/index.blade.php ENDPATH**/ ?>