<?php $__env->startSection('title', 'Data Genre'); ?>

<?php $__env->startSection('content'); ?>
<div class="clearfix">
  <h2 class="pull-left" style="margin-top:0">Data Genre</h2>
  <a href="<?php echo e(route('admin.genres.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Genre</a>
</div>

<form method="GET" class="form-inline" style="margin-bottom:15px">
  <input type="text" name="q" value="<?php echo e(request('q')); ?>" class="form-control" placeholder="Cari genre...">
  <button class="btn btn-default"><i class="fa fa-search"></i></button>
</form>

<div class="panel panel-default">
  <table class="table table-striped table-hover">
    <thead><tr><th>#</th><th>Nama</th><th>Jumlah Film</th><th width="130">Aksi</th></tr></thead>
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($genres->firstItem() + $loop->index); ?></td>
        <td><?php echo e($genre->name); ?></td>
        <td><?php echo e($genre->films_count); ?></td>
        <td>
          <a href="<?php echo e(route('admin.genres.edit', $genre)); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
          <form action="<?php echo e(route('admin.genres.destroy', $genre)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus genre ini?')">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr><td colspan="4" class="text-center text-muted">Tidak ada data.</td></tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>
<?php echo e($genres->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/admin/genres/index.blade.php ENDPATH**/ ?>