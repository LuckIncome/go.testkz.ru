<!-- Footer start -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer__logo">
          <a href="/">
            <img src="<?php echo e(Voyager::image(setting('site.footer_logo'))); ?>" alt="Федерация Го">
          </a>
        </div>
        <div class="footer__content">
          <div class="footer__menu">
            <nav class="menu">

              <?php echo e(menu('header_menu','vendor.voyager.menu.header_menu')); ?>


            </nav>
          </div>
          <div class="footer__info">
            <div class="contact-us">
              <div class="phone-img">
                <img src="<?php echo e(asset('assets/images/logo-contacts.svg')); ?>" alt="logo-contacts">
              </div>
              <div class="phone-info">
                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($email->value); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </div>  
            </div>
            <div class="address">
              <div class="phone-img">
                <img src="<?php echo e(asset('assets/images/map.svg')); ?>" alt="map">
              </div>
                <div class="phone-info">
                  <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($adress->translate_value); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
          </div>
        </div>
        <div class="footer__media">
          <div class="media__title"><?php echo app('translator')->get('general.subscribeToUs'); ?></div>
          <ul class="socials">
            <?php $__currentLoopData = $socials_white; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a class="socials-icon" href="<?php echo e($social->link); ?>">
                    <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->translate_value); ?>">
                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
      <div class="footer-bot">
        <span>© <?php echo e(date('Y')); ?> <?php echo app('translator')->get('general.reserved'); ?></span>
        <a href="/privacy"><?php echo app('translator')->get('general.privacy'); ?></a>
        <div class="web-logo">
          <a href="https://i-marketing.kz/"><img src="<?php echo e(asset('assets/images/logo-WEB.png')); ?>" alt="i-marketing"></a> 
        </div>
      </div>
    </div>
  </footer>

  <footer class="footer footer__mobile">
    <div class="container">
      <div class="footer-top">
        <div class="footer__logo">
          <a href="/">
            <img src="<?php echo e(Voyager::image(setting('site.footer_logo'))); ?>" alt="Федерация Го">
          </a>
        </div>
        <div class="footer__media">
          <div class="media__title">Подписывайтесь на нас 
            в соц.сетях:</div>
          <ul class="socials">
            <?php $__currentLoopData = $socials_white; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a class="socials-icon" href="<?php echo e($social->link); ?>">
                    <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->translate_value); ?>">
                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
      <div class="footer__content">
        <div class="footer__menu">
          <nav class="menu">

            <?php echo e(menu('header_menu','vendor.voyager.menu.header_menu')); ?>


          </nav>
        </div>
        <div class="footer__info">
          <div class="contact-us">
            <div class="phone-img">
              <img src="<?php echo e(asset('assets/images/logo-contacts.svg')); ?>" alt="logo-contacts">
            </div>
            <div class="phone-info">
              <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($email->value); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>  
          </div>
          <div class="address">
            <div class="phone-img">
              <img src="<?php echo e(asset('assets/images/map.svg')); ?>" alt="map">
            </div>
              <div class="phone-info">
                <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($adress->translate_value); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
        </div>
      </div>
      <div class="footer-bot">
        <span>© <?php echo e(date('Y')); ?> <?php echo app('translator')->get('general.reserved'); ?></span>
        <a href="/privacy"><?php echo app('translator')->get('general.privacy'); ?></a>
        <div class="web-logo">
          <a href="https://i-marketing.kz/">
            <img src="<?php echo e(asset('assets/images/logo-WEB.png')); ?>" alt="i-marketing">
          </a> 
        </div>
      </div>
    </div>
  </footer>
<!-- Footer end -->

<?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/footer.blade.php ENDPATH**/ ?>