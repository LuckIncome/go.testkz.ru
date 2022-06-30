@extends('partials.layout')
@section('page_title',(strlen($article->title) > 1 ? $article->title : ''))
@section('seo_title', (strlen($article->seo_title) > 1 ? $article->seo_title : ''))
@section('meta_keywords',(strlen($article->meta_keywords) > 1 ? $article->meta_keywords : ''))
@section('meta_description', (strlen($article->meta_description) > 1 ? $article->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

	<section class="breadcrumbs">
      <div class="container">
          @include('partials.breadcrumbs',['title'=>$page->title, 'titleLink' => '/news', 'subtitle' => $article->title])
      </div>
    </section>

	<section class="news-inner">
    <div class="container">
      <div class="page-title">{{$article->title}}</div>
      <div class="new-content">
        <div class="new-date">{{date('d/m/Y', strtotime($article->created_at))}}</div>
        {{-- <div class="new-title">{{$article->title}}</div> --}}
        <div class="new-img">
            <img src="{{\Voyager::image($article->image)}}" alt="{{$article->alt_image}}">
        </div>
        <div class="new-source">Фото: @if($article->image_source) {{$article->image_source}} @else источник @endif</div>
        <div class="new-text">
          {!!$article->content!!}
        </div>
          <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram,twitter,whatsapp,moimir"></div>
      </div>
      <div class="others__title">@lang('general.seeAlso')</div>
    </div>
    @if($articles)
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
    @endif
  </section>

@endsection