
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

	<section class="breadcrumbs">
      <div class="container">
          <?php echo $__env->make('partials.breadcrumbs',['title' => $page->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
  </section>

  <section class="blogs">
    <div class="container">
      <div class="page-title"><?php echo e($page->title); ?></div>
      <div class="blog__items">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <div class="blog__item">
              <div class="blog__item-img">
                  <img src="<?php echo e(\Voyager::image($blog->image)); ?>" alt="<?php echo e($blog->alt_image); ?>">
              </div>
              <div class="blog__item-content">
                  <div class="blog__item-title"> 
                  	<a href="<?php echo e(route('blog.show', ['article' => $blog->slug])); ?>">
                  		<?php echo e($blog->title); ?>

                  	</a> 
                  </div>
                  <div class="blog__item-text">
                    <?php echo \Illuminate\Support\Str::limit(strip_tags($blog->content), 200,'...'); ?>

                  </div>
                  <div class="blog__item-date"><?php echo e(date('d/m/Y', strtotime($blog->created_at))); ?>.</div>
              </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/pages/blog/index.blade.php ENDPATH**/ ?>