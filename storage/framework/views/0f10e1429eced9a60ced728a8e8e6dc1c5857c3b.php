
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
            <?php echo $__env->make('partials.breadcrumbs',[ 'title'=> $page->title ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>

	<section class="contacts">
	    <div class="container">
	      <div class="page-title"><?php echo e($page->title); ?></div>
	      <div class="contacts-content">
	        <div class="contacts-text">
	            <div class="contact-item">
	                <div class="contact-title"><?php echo app('translator')->get('general.phone'); ?>:</div>
	                <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <div class="contact-info"> 
		                  	<a href="tel:+<?php echo e(preg_replace("/[^,.0-9]/", '', $phone->value)); ?>">
		                  		<?php echo e($phone->value); ?>

		                  	</a>
		                  	<?php if(!$loop->last): ?><br><?php endif; ?>
	                    </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div>
	            <div class="contact-item">
	                <div class="contact-title">E-mail:</div>
	                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                  <div class="contact-info"> 
	                  	<a href="<?php echo e($email->link); ?>">
	                  		<?php echo e($email->value); ?>

	                  	</a>
	                  	<?php if(!$loop->last): ?><br><?php endif; ?>
	                  </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div>
	            <div class="contact-item">
	                <div class="contact-title"><?php echo app('translator')->get('general.adress'); ?>:</div>
	                <div class="contact-info"> 
	                	<?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    		<a href="<?php echo e($adress->link); ?>"><?php echo e($adress->translate_value); ?></a>
                  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </div>
	            </div>
	        </div>
	        <div class="contacts-map">
	            <?php echo $map->value; ?>

	        </div>
	      </div>
	    </div>
	</section>

	<?php if($hide->hide_block == 0): ?>
    	<?php echo $__env->make('partials.loops.mailing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/pages/contacts.blade.php ENDPATH**/ ?>