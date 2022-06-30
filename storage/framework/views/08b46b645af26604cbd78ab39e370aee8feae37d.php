<!-- Header start -->
  <header class="header">
    <div class="container">
      <div class="header-inner">
        <div class="header__logo">
          <a href="/"><img src="<?php echo e(Voyager::image(setting('site.header_logo'))); ?>" alt="Федерация Го"></a>
        </div>
        <nav class="menu">

          <?php echo e(menu('header_menu','vendor.voyager.menu.header_menu')); ?>


        </nav>
        <div class="dropdown">
          <select name="lang" id="lang" class="lang select">
              <option value="ru" <?php if($locale == 'ru'): ?> selected <?php endif; ?> class="option-lang">
                Рус
              </option>
              <option value="kz" <?php if($locale == 'kz'): ?> selected <?php endif; ?> class="option-lang">
                Каз
              </option>
              <option value="en" <?php if($locale == 'en'): ?> selected <?php endif; ?> class="option-lang">
                Eng
              </option>
          </select>
        </div>
        <ul class="socials">
          <?php $__currentLoopData = $socials_black; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a class="socials-icon" href="<?php echo e($social->link); ?>">
                  <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->translate_value); ?>">
              </a>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
        </ul>
      </div>
    </div>
  </header>

  <header class="header header__mobile">
    <div class="container">
      <div class="header-top">
        <div class="header__logo">
          <a href="/"><img src="<?php echo e(Voyager::image(setting('site.header_logo'))); ?>" alt="Федерация Го"></a>
        </div>
        <select name="lang" id="lang" class="lang select">
          <option value="ru" <?php if($locale == 'ru'): ?> selected <?php endif; ?> class="option-lang">
            Рус
          </option>
          <option value="kz" <?php if($locale == 'kz'): ?> selected <?php endif; ?> class="option-lang">
            Каз
          </option>
          <option value="en" <?php if($locale == 'en'): ?> selected <?php endif; ?> class="option-lang">
            Eng
          </option>
        </select>
        <button @click="toggleMobile">
          <transition name="fade" mode="out-in">
            <div class="burger__icon" key="Open" v-if="!dropdown2">
              <img src="<?php echo e(asset('assets/images/burger.svg')); ?>" alt="burger">
            </div> 
            <div class="burger__icon" key="Close" v-else=>
              <img src="<?php echo e(asset('assets/images/close.svg')); ?>" alt="close">
            </div>     
          </transition>
        </button>       
      </div>
      <div class="header-bot">
        <transition name="fade" mode="out-in">
          <div class="dropdown2" v-if="dropdown2">
            <nav class="menu">

              <?php echo e(menu('header_menu','vendor.voyager.menu.header_menu')); ?>


            </nav>
            <ul class="socials__mob">
              <?php $__currentLoopData = $socials_black; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <a class="socials-icon" href="<?php echo e($social->link); ?>">
                      <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->translate_value); ?>">
                  </a>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="mob-select">
              
            </div>
          </div>
      </transition>
      </div>
    </div>
  </header>
<!-- Header end --><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/header.blade.php ENDPATH**/ ?>