<!-- Modal start -->
  <div class="modal fade" id="appModal" tabindex="-1" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@lang('general.feedbackModalTitle')</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="requestFor" action="{{ route('feedback') }}" method="POST">
        <div class="modal-body">
          
            <div class="mb-3">
              <label for="surname" class="col-form-label">@lang('general.surname')*:</label>
              <input type="text" name="surname" id="surname" class="form-control"  required>
              <label for="name" class="col-form-label">@lang('general.name')*:</label>
              <input type="text" name="name" id="name" class="form-control"  required>
              <label for="number" class="col-form-label">@lang('general.phoneNumber')*:</label>
              <input type="tel" name="phone" id="number" class="form-control"  required>
              <label for="email" class="col-form-label">E-mail:</label>
              <input type="text" name="email" id="email" class="form-control" required>
              <input type="hidden" name="page" value="">
              <input type="hidden" name="url" value="{{url()->current()}}">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('general.close')</button>
          <button type="submit" class="btn btn-primary">@lang('general.send')</button>
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
                @lang('general.thanks')
              </div>
              <div class="text-center">
                  @lang('general.subscribedThanks')
              </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('general.close')</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="m-thanks" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                  @lang('general.thanks')
                </div>
                <div class="text-center">
                    @lang('general.requestSend')
                    @lang('general.callbackAns')
                </div>               
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>
<!-- modal thanks end -->

 