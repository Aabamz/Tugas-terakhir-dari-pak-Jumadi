<?php $__env->startPush('style'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/list-css/table-style.css')); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/list-css/basictable.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

<script type="text/javascript" src="<?php echo e(asset('template/list-js/jquery.basictable.min.js')); ?>"></script>
 <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();
      $('#table-breakpoint').basictable({
        breakpoint: 768
      });
    });
  </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <br />
  <!-- /w3l-medile-movies-grids -->
    <div class="agileits-single-top">
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('movies')); ?>">Movies</a></li>
        <li class="active"><?php echo e($film->title); ?></li>
      </ol>
    </div>
    <div class="single-page-agile-info">
                 <!-- /movie-browse-agile -->
                         <div class="show-top-grids-w3lagile">
      <div class="col-sm-8 single-left">
        <div class="song">
          <div class="single-right-grids">

            <div class="col-md-4 single-right-grid-left">
              <a href="<?php echo e(route('movies.show', $film->id)); ?>"><img src="<?php echo e($film->poster_url); ?>" alt="" /></a>
            </div>
            <div class="col-md-8 single-right-grid-right">
              <div class="song-info">
                <h2><?php echo e($film->title); ?></h2>	
                <p class="author"><a href="#" class="author"><?php echo e($film->year); ?></a>
                  <?php if($film->genre): ?> &middot; <a href="<?php echo e(route('genre', $film->genre->id)); ?>" class="author"><?php echo e($film->genre->name); ?></a> <?php endif; ?></p>
                <?php if(auth()->guard()->check()): ?>
                  <form action="<?php echo e(route('watchlist.toggle', $film)); ?>" method="POST" style="margin-bottom:10px">
                    <?php echo csrf_field(); ?>
                    <?php $saved = auth()->user()->hasWatchlisted($film->id); ?>
                    <button type="submit" class="btn btn-<?php echo e($saved ? 'danger' : 'primary'); ?> btn-sm">
                      <i class="fa <?php echo e($saved ? 'fa-minus' : 'fa-plus'); ?>"></i>
                      <?php echo e($saved ? 'Hapus dari Watchlist' : 'Simpan ke Watchlist'); ?>

                    </button>
                  </form>
                <?php else: ?>
                  <p><a href="#" data-toggle="modal" data-target="#myModal">Login</a> untuk menyimpan film ini ke watchlist.</p>
                <?php endif; ?>
                <p class="views"><?php echo e($film->sinopsis); ?></p>
              </div>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                  <div class="agile-news-table">
                    <table id="table-breakpoint">
                      <thead>
                        <tr>
                        <th>Cast</th>
                        <th>Peran</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $perans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="w3-list-info"><?php echo e($peran->cast->name ?? '-'); ?></td>
                          <td class="w3-list-info"><?php echo e($peran->actor); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="song-grid-right">
          <div class="share">
            <h5>Share this</h5>
            <div class="single-agile-shar-buttons">
            <ul>
              <li>
                <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
              </li>
              <li>
                <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
              </li>
              <li class="news-twitter">
                <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
              <li>
                <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
              <li>
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="medium"></div>

                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">
                  (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/platform.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
              </li>
            </ul>
          </div>
          </div>
        </div>
        <div class="clearfix"> </div>
        <div class="all-comments">
          <div class="all-comments-info">
            <a href="#">Comments</a>
            <div class="agile-info-wthree-box">
              <?php if(auth()->guard()->check()): ?>
              <form action="<?php echo e(route('comments.store', $film)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <select name="rating" required="" style="margin-bottom:10px">
                  <?php for($i = 5; $i >= 1; $i--): ?>
                    <option value="<?php echo e($i); ?>" <?php echo e(old('rating') == $i ? 'selected' : ''); ?>>Rating <?php echo e($i); ?>/5</option>
                  <?php endfor; ?>
                </select>
                <textarea name="comment" placeholder="Tulis komentar..." required=""><?php echo e(old('comment')); ?></textarea>
                <input type="submit" value="SEND">
                <div class="clearfix"> </div>
              </form>
              <?php else: ?>
                <p style="padding:15px 0">Silakan <a href="#" data-toggle="modal" data-target="#myModal">login</a> untuk menulis komentar.</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="media-grids">
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="media" id="komentar-<?php echo e($comment->id); ?>">
                <h5><?php echo e($comment->user->name ?? 'User'); ?> &middot; <?php echo e($comment->rating); ?>/5</h5>
                <div class="media-left">
                  <a href="#">
                    <img src="<?php echo e(asset('storage/images/user.jpg')); ?>" title="One movies" alt=" " />
                  </a>
                </div>
                <div class="media-body">
                  <p><?php echo e($comment->comment); ?></p>

                  
                  <?php $__currentLoopData = $comment->balasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="media" style="margin-left:30px; border-left:2px solid #eee; padding-left:12px">
                      <h5 style="font-size:13px">
                        <i class="fa fa-reply"></i> <?php echo e($balasan->user->name ?? 'User'); ?>

                        <?php if(auth()->check() && ($balasan->user_id === auth()->id() || auth()->user()->isAdmin())): ?>
                          <form action="<?php echo e(route('balasan.destroy', $balasan)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus balasan ini?')">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-xs btn-link text-danger" style="padding:0">hapus</button>
                          </form>
                        <?php endif; ?>
                      </h5>
                      <p><?php echo e($balasan->comment); ?></p>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  
                  <?php if(auth()->guard()->check()): ?>
                    <form action="<?php echo e(route('balasan.store', $comment)); ?>" method="POST" style="margin:10px 0 0 30px">
                      <?php echo csrf_field(); ?>
                      <input type="text" name="comment" placeholder="Balas komentar ini..." required="" style="width:70%; display:inline-block">
                      <button type="submit" class="btn btn-default btn-xs">Balas</button>
                    </form>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-right">
        <h3>Similar Film By Genre</h3>
        <?php $__currentLoopData = $filmByGenre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="single-grid-right">
            <div class="single-right-grids">
              <div class="col-md-4 single-right-grid-left">
                <a href="<?php echo e(route('movies.show', $similar->id)); ?>"><img src="<?php echo e($similar->poster_url); ?>" alt="" /></a>
              </div>
              <div class="col-md-8 single-right-grid-right">
                <a href="<?php echo e(route('movies.show', $similar->id)); ?>" class="title"><?php echo e($similar->title); ?></a>
                <p class="author"><a href="#" class="author"><?php echo e($similar->year); ?></a></p>
                <p class="views" style="text-align: justify; margin-right: 10px"><?php echo e($similar->sinopsis); ?></p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="clearfix"> </div>
    </div>
      <!-- //movie-browse-agile -->
      <!--body wrapper start-->
    <div class="w3_agile_banner_bottom_grid">
      <div id="owl-demo" class="owl-carousel owl-theme">
        <?php $__currentLoopData = $filmByRelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filmRelease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
              <a href="<?php echo e(route('movies.show', $filmRelease->id)); ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo e($filmRelease->poster_url); ?>" title="<?php echo e($filmRelease->title); ?>" class="img-responsive" alt=" " />
                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
              </a>
              <div class="mid-1 agileits_w3layouts_mid_1_home">
                <div class="w3l-movie-text">
                  <h6><a href="<?php echo e(route('movies.show', $filmRelease->id)); ?>"><?php echo e($filmRelease->title); ?></a></h6>							
                </div>
                <div class="mid-2 agile_mid_2_home">
                  <p><?php echo e($filmRelease->year); ?></p>
                  <div class="block-stars">
                    <ul class="w3l-ratings">
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <?php if($filmRelease->year == now()->year): ?>
                <div class="ribben">
                  <p>NEW</p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  <!--body wrapper end-->
          
             
      </div>
      <!-- //w3l-latest-movies-grids -->
    </div>	
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (2)\laravel-kelas-xii-main\resources\views/components/movie-show.blade.php ENDPATH**/ ?>