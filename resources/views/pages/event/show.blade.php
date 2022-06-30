@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

	<section class="breadcrumbs">
      <div class="container">
          @include('partials.breadcrumbs',['title'=>$page->title, 'titleLink' => '/event', 'subtitle' => $event->title])
      </div>
  </section>

  <section class="event-inner">
    <div class="container">
      <div class="page-title">{{$event->title}}</div>
      <div class="event-inner__content">
          <div class="event-inner__date">{{date('d/m/Y', strtotime($event->created_at))}}.</div>
          {{-- <div class="event-inner__title">{{$event->title}}</div> --}}
          <div class="event-inner__img">
              <img src="{{\Voyager::image($event->image)}}" alt="{{$event->alt_image}}">
          </div>
          <div class="event-inner__text">
            {!!$event->content!!}
          </div>
          <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
          @if($event->register == 1)
          <form id="eventback" action="{{ route('eventback') }}" method="POST" class="application">
              @csrf
              <div class="app__text">
                  <div class="app__text-top">@lang('general.feedbackModalTitle')</div>
                  <div class="app__text-bot">@lang('general.sendYourData')</div>
              </div>
              <div class="app__inputs">
                  <input class="app__input" type="text" name="surname" placeholder="@lang('general.surname')*" required>
                  <input class="app__input" type="text" name="name" placeholder="@lang('general.name')*" required>
                  <input class="app__input" type="text" name="phone" placeholder="@lang('general.phoneNumber')*" required>
                  <input class="app__input" name="email" type="text" placeholder="E-mail" required>
                  <input type="hidden" name="url" value="{{\Request::url()}}">
              </div>
              <button type="submit">@lang('general.send')</button>
          </form>
          @endif
      </div>
      @if($events)
      <div class="event-inner__others">
        <div class="others__title">@lang('general.otherActivities')</div>
        <div class="event__items">
          @foreach($events as $event)
          <div class="event__item">
              <div class="event__img">
                <img src="{{\Voyager::image($event->image)}}" alt="{{$event->alt_image}}">
              </div>
              <div class="event__info">
                <span>{{date('d/m/Y', strtotime($event->created_at))}}</span>
                <div class="event__title"> <a href="{{ route('event.show', ['article' => $event->slug]) }}">{{$event->title}}</a></div>
                <div class="event__text">
                  {!! \Illuminate\Support\Str::limit(strip_tags($event->content), 200,'...') !!}
                </div>
                  <div class="links">
                      <div class="details"> <a href="{{ route('event.show', ['article' => $event->slug]) }}">Подробнее</a></div>
                      <div class="share">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"  data-bs-auto-close="outside">Поделиться</a> 
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a href="#"><img src="images/copy-facebook.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-insta.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-telegram.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-twitter.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-vk.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-whatsapp.svg" alt="icon"></a></li>
                          <li><a href="#"><img src="images/copy-link.svg" alt="icon"></a></li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach 
        </div>
      </div>
      @endif
    </div>
  </section>

@endsection