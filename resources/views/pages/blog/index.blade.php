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
          @include('partials.breadcrumbs',['title' => $page->title])
      </div>
  </section>

  <section class="blogs">
    <div class="container">
      <div class="page-title">{{$page->title}}</div>
      <div class="blog__items">
        @foreach($blogs as $blog) 
          <div class="blog__item">
              <div class="blog__item-img">
                  <img src="{{\Voyager::image($blog->image)}}" alt="{{$blog->alt_image}}">
              </div>
              <div class="blog__item-content">
                  <div class="blog__item-title"> 
                  	<a href="{{ route('blog.show', ['article' => $blog->slug]) }}">
                  		{{$blog->title}}
                  	</a> 
                  </div>
                  <div class="blog__item-text">
                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 200,'...') !!}
                  </div>
                  <div class="blog__item-date">{{date('d/m/Y', strtotime($blog->created_at))}}.</div>
              </div>
          </div>
        @endforeach 
      </div>
    </div>
  </section>

@endsection