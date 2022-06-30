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
          @include('partials.breadcrumbs',['title'=>$page->title])
      </div>
  </section>

  <section class="news-page">
    <div class="container">
      <div class="page-title">{{$page->title}}</div>
      <div class="news-items">
          @foreach($events as $event) 
          <div class="news-item" style=" background-image: url({{\Voyager::image($event->image)}})">
            <div class="new__title">
                <span>{{date('d/m/Y', strtotime($event->created_at))}}</span> <br>
                <a href="{{ route('event.show', ['article' => $event->slug]) }}">
                	{!! \Illuminate\Support\Str::limit(strip_tags($event->content), 200,'...') !!}
                </a>
            </div>
            <div class="new__share">
              <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
            </div>
          </div> 
          @endforeach 
      </div>
    </div>
  </section>

@endsection