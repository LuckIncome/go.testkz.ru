
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
          <?php echo $__env->make('partials.breadcrumbs',[ 'title'=>$page->title ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
  </section>


	<section class="news-page">
    <div class="container">
      <div class="page-title"><?php echo e($page->title); ?></div>
      <div class="news-items">
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <div class="news-item" style=" background-image: url(<?php echo e(\Voyager::image($article->image)); ?>)">
            <div class="new__title">
                <span><?php echo e(date('d/m/Y', strtotime($article->created_at))); ?></span> <br>
                <a href="<?php echo e(route('news.show', ['article' => $article->slug])); ?>">
                	<?php echo \Illuminate\Support\Str::limit(strip_tags($article->content), 200,'...'); ?>

                </a>
            </div>
            <div class="new__share">
              <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
            </div>
          </div> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </div>
    </div>
  </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/pages/news/index.blade.php ENDPATH**/ ?>