<!-- Modal start -->
  <div class="modal fade" id="appModal" tabindex="-1" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.feedbackModalTitle'); ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="requestFor" action="<?php echo e(route('feedback')); ?>" method="POST">
        <div class="modal-body">
          
            <div class="mb-3">
              <label for="surname" class="col-form-label"><?php echo app('translator')->get('general.surname'); ?>*:</label>
              <input type="text" name="surname" id="surname" class="form-control"  required>
              <label for="name" class="col-form-label"><?php echo app('translator')->get('general.name'); ?>*:</label>
              <input type="text" name="name" id="name" class="form-control"  required>
              <label for="number" class="col-form-label"><?php echo app('translator')->get('general.phoneNumber'); ?>*:</label>
              <input type="tel" name="phone" id="number" class="form-control"  required>
              <label for="email" class="col-form-label">E-mail:</label>
              <input type="text" name="email" id="email" class="form-control" required>
              <input type="hidden" name="page" value="">
              <input type="hidden" name="url" value="<?php echo e(url()->current()); ?>">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
          <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('general.send'); ?></button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- Modal end -->

<!-- modal thanks start -->
<div class="modal fade" id="m-subscribed" tabindex="-1" role="dialog"
   aria-labelledby="appModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
              <div class="text-center">
                <?php echo app('translator')->get('general.thanks'); ?>
              </div>
              <div class="text-center">
                  <?php echo app('translator')->get('general.subscribedThanks'); ?>
              </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="m-thanks" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                  <?php echo app('translator')->get('general.thanks'); ?>
                </div>
                <div class="text-center">
                    <?php echo app('translator')->get('general.requestSend'); ?>
                    <?php echo app('translator')->get('general.callbackAns'); ?>
                </div>               
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- modal thanks end -->

 <?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/modals.blade.php ENDPATH**/ ?>