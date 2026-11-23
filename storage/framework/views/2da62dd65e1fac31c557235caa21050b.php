<?php $__env->startSection('title', $film->exists ? 'Edit Film' : 'Tambah Film'); ?>

<?php $__env->startSection('content'); ?>
<h2 style="margin-top:0"><?php echo e($film->exists ? 'Edit Film' : 'Tambah Film'); ?></h2>

<div class="panel panel-default"><div class="panel-body">
<form action="<?php echo e($film->exists ? route('admin.films.update', $film) : route('admin.films.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php if($film->exists): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

  <div class="form-group <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <label>Judul</label>
    <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $film->title)); ?>">
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="help-block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="row">
    <div class="col-sm-6">
  <div class="form-group <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <label>Tahun</label>
    <input type="number" name="year" class="form-control" value="<?php echo e(old('year', $film->year)); ?>">
    <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="help-block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
    </div>
    <div class="col-sm-6">
  <div class="form-group <?php $__errorArgs = ['genre_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <label>Genre</label>
    <select name="genre_id" class="form-control">
      <option value="">-- pilih genre --</option>
      <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($opt->id); ?>" <?php echo e(old('genre_id', $film->genre_id) == $opt->id ? 'selected' : ''); ?>><?php echo e($opt->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['genre_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="help-block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
    </div>
  </div>
  <div class="form-group <?php $__errorArgs = ['sinopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <label>Sinopsis</label>
    <textarea name="sinopsis" rows="5" class="form-control"><?php echo e(old('sinopsis', $film->sinopsis)); ?></textarea>
    <?php $__errorArgs = ['sinopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="help-block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group <?php $__errorArgs = ['poster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <label>Poster <?php echo e($film->exists ? '(kosongkan jika tidak diganti)' : ''); ?></label>
    <?php if($film->exists): ?>
      <div style="margin-bottom:8px"><img src="<?php echo e($film->poster_url); ?>" style="height:140px" alt=""></div>
    <?php endif; ?>
    <input type="file" name="poster" accept="image/*">
    <p class="help-block">jpg / png / webp, maksimal 2 MB. Disimpan di <code>storage/app/public/images</code>.</p>
    <?php $__errorArgs = ['poster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="help-block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
  <a href="<?php echo e(route('admin.films.index')); ?>" class="btn btn-default">Batal</a>
</form>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/admin/films/form.blade.php ENDPATH**/ ?>