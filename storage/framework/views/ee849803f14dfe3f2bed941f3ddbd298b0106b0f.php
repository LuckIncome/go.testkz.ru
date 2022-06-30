
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

	<section class="banner" style="background-image: url(<?php echo e(\Voyager::image($title->image)); ?>)">
	    <div class="container">
	      <div class="banner__content">
	        <div class="banner__title"><?php echo e($title->title); ?></div>
	          <div class="banner__text"><?php echo $title->excerpt; ?></div>
          <?php if($title->hide_button == 0): ?>
	        <div class="send-app">
	          <button data-bs-toggle="modal" data-bs-target="#appModal"><?php echo e($title->button_text); ?></button>
	        </div>
          <?php endif; ?>
	      </div>
	    </div>
    </section>

    <section class="events">
    <div class="container">
      <div class="title">
        
        <?php echo app('translator')->get('general.events'); ?>
      </div>
      <div class="event__items">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="event__item">
          <div class="event__img">
            <img src="<?php echo e(\Voyager::image($event->image)); ?>" alt="<?php echo e($event->alt_image); ?>">
          </div>
          <div class="event__info">
            <span><?php echo e(date('d/m/Y', strtotime($event->created_at))); ?>.</span>
            <div class="event__title"> 
            	<a href="<?php echo e(route('event.show', ['article' => $event->slug])); ?>">
            		<?php echo e($event->title); ?>

            	</a>
            </div>
            <div class="event__text">
              <?php echo \Illuminate\Support\Str::limit(strip_tags($event->content), 200,'...'); ?>

            </div>
            <div class="links">
                <div class="details"> 
              		<a href="<?php echo e(route('event.show', ['article' => $event->slug])); ?>">
              			<?php echo app('translator')->get('general.more'); ?>
                	</a>
          		</div>
              <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </div>
    </div>
  </section>
  <section class="news">
    <div class="container">
      <div class="title">
        
        <?php echo app('translator')->get('general.news'); ?>
      </div>
    </div>
    <div class="new__items">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <div class="new__item" style=" background-image: url(<?php echo e(\Voyager::image($article->image)); ?>)">
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
  </section>

  <section class="partners">
    <div class="container">
      <div class="title">
        
        <?php echo app('translator')->get('general.ourPartners'); ?>
      </div>
      <div class="partner__items">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="partner__item">
          <div class="partner__logo">
            <img src="<?php echo e(\Voyager::image($partner->image)); ?>" alt="<?php echo e($partner->alt_image); ?>">
          </div>
          <div class="partner__title"><?php echo $partner->excerpt; ?></div>
            <div class="details"> 
	          	<a href="<?php echo e($partner->link); ?>">
	          		<?php echo app('translator')->get('general.more'); ?>
	            </a>
        	</div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
      </div>
    </div>
  </section>

  <?php if($hide->hide_block == 0): ?>
    <?php echo $__env->make('partials.loops.mailing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/pages/home.blade.php ENDPATH**/ ?>