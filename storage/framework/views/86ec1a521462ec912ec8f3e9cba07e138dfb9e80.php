<section class="mailing">
	<div class="container">
		<div class="mailing__text">
			<div class="mailing__title"><?php echo app('translator')->get('general.subscribeToOurNewsletter'); ?></div>
			<span><?php echo app('translator')->get('general.getSpecialOffersAndNewsFromUsFirst'); ?></span>
		</div>
	    <form id="subscription" action="<?php echo e(route('subscribe')); ?>" method="POST" class="mailing__button">
	        <?php echo csrf_field(); ?>
		    <input type="email" name="email" placeholder="E-mail" required>
		    <button type="submit"><?php echo app('translator')->get('general.subscribe'); ?></button>
	    </form>
	</div>
</section><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/loops/mailing.blade.php ENDPATH**/ ?>