@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

	<section class="banner" style="background-image: url({{\Voyager::image($title->image)}})">
	    <div class="container">
	      <div class="banner__content">
	        <div class="banner__title">{{ $title->title }}</div>
	          <div class="banner__text">{!! $title->excerpt !!}</div>
          @if($title->hide_button == 0)
	        <div class="send-app">
	          <button data-bs-toggle="modal" data-bs-target="#appModal">{{ $title->button_text }}</button>
	        </div>
          @endif
	      </div>
	    </div>
    </section>

    <section class="events">
    <div class="container">
      <div class="title">
        {{-- <span>@lang('general.whatAwaitsUs')</span> <br> --}}
        @lang('general.events')
      </div>
      <div class="event__items">
        @foreach($events as $event) 
        <div class="event__item">
          <div class="event__img">
            <img src="{{\Voyager::image($event->image)}}" alt="{{$event->alt_image}}">
          </div>
          <div class="event__info">
            <span>{{date('d/m/Y', strtotime($event->created_at))}}.</span>
            <div class="event__title"> 
            	<a href="{{ route('event.show', ['article' => $event->slug]) }}">
            		{{$event->title}}
            	</a>
            </div>
            <div class="event__text">
              {!! \Illuminate\Support\Str::limit(strip_tags($event->content), 200,'...') !!}
            </div>
            <div class="links">
                <div class="details"> 
              		<a href="{{ route('event.show', ['article' => $event->slug]) }}">
              			@lang('general.more')
                	</a>
          		</div>
              <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
            </div>
          </div>
        </div>
        @endforeach 
      </div>
    </div>
  </section>
  <section class="news">
    <div class="container">
      <div class="title">
        {{-- <span>@lang('general.somethingInteresting')</span> <br> --}}
        @lang('general.news')
      </div>
    </div>
    <div class="new__items">
    @foreach($articles as $article) 
      <div class="new__item" style=" background-image: url({{\Voyager::image($article->image)}})">
        <div class="new__title">
          	<span>{{date('d/m/Y', strtotime($article->created_at))}}</span> <br>
            <a href="{{ route('news.show', ['article' => $article->slug]) }}">
          		{!! \Illuminate\Support\Str::limit(strip_tags($article->content), 200,'...') !!}
        	</a>
        </div>
        <div class="new__share">
            <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
        </div>
      </div>
    @endforeach     
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="title">
        {{-- <span>@lang('general.weСooperate') </span> <br> --}}
        @lang('general.ourPartners')
      </div>
      <div class="partner__items">
        @foreach($partners as $partner) 
        <div class="partner__item">
          <div class="partner__logo">
            <img src="{{\Voyager::image($partner->image)}}" alt="{{$partner->alt_image}}">
          </div>
          <div class="partner__title">{!! $partner->excerpt !!}</div>
            <div class="details"> 
	          	<a href="{{$partner->link}}">
	          		@lang('general.more')
	            </a>
        	</div>
        </div>
        @endforeach           
      </div>
    </div>
  </section>

  @if($hide->hide_block == 0)
    @include('partials.loops.mailing')
  @endif

@endsection