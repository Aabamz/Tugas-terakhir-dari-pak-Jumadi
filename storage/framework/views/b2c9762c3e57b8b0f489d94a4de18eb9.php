<?php $__env->startSection('title', 'Data User'); ?>

<?php $__env->startSection('content'); ?>
<div class="clearfix">
  <h2 class="pull-left" style="margin-top:0">Data User</h2>
  <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah User</a>
</div>

<form method="GET" class="form-inline" style="margin-bottom:15px">
  <input type="text" name="q" value="<?php echo e(request('q')); ?>" class="form-control" placeholder="Cari nama / email...">
  <button class="btn btn-default"><i class="fa fa-search"></i></button>
</form>

<div class="panel panel-default">
  <table class="table table-striped table-hover">
    <thead><tr><th>#</th><th>Nama</th><th>Email</th><th>Role</th><th width="130">Aksi</th></tr></thead>
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($users->firstItem() + $loop->index); ?></td>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><span class="label label-<?php echo e($user->role?->name === 'admin' ? 'danger' : 'default'); ?>"><?php echo e($user->role->name ?? '-'); ?></span></td>
        <td>
          <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
          <?php if($user->id !== auth()->id()): ?>
            <form action="<?php echo e(route('admin.users.destroy', $user)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus user ini?')">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
          </form>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr><td colspan="5" class="text-center text-muted">Tidak ada data.</td></tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>
<?php echo e($users->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/admin/users/index.blade.php ENDPATH**/ ?>