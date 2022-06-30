
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
            <?php echo $__env->make('partials.breadcrumbs',['title'=>$page->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    
    <section class="about">
    <div class="about__banner"></div>
    <div class="container">
        <div class="about__title"><?php echo e($aboutus->title); ?></div>
        <div class="about__top">
            <?php echo strip_tags($aboutus->content); ?>

        </div>
        <div class="about__bot">
            <img src="<?php echo e(\Voyager::image($aboutus->image)); ?>" alt="<?php echo e($aboutus->alt_image); ?>">
            <div class="text__right">
                <?php echo $aboutus->excerpt; ?>

            </div>
        </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/pages/about.blade.php ENDPATH**/ ?>