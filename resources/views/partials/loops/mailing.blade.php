<section class="mailing">
	<div class="container">
		<div class="mailing__text">
			<div class="mailing__title">@lang('general.subscribeToOurNewsletter')</div>
			<span>@lang('general.getSpecialOffersAndNewsFromUsFirst')</span>
		</div>
	    <form id="subscription" action="{{route('subscribe')}}" method="POST" class="mailing__button">
	        @csrf
		    <input type="email" name="email" placeholder="E-mail" required>
		    <button type="submit">@lang('general.subscribe')</button>
	    </form>
	</div>
</section>