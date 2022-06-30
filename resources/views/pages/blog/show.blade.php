@extends('partials.layout')
@section('page_title',(strlen($blog->title) > 1 ? $blog->title : ''))
@section('seo_title', (strlen($blog->seo_title) > 1 ? $blog->seo_title : ''))
@section('meta_keywords',(strlen($blog->meta_keywords) > 1 ? $blog->meta_keywords : ''))
@section('meta_description', (strlen($blog->meta_description) > 1 ? $blog->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

	<section class="breadcrumbs">
      <div class="container">
          @include('partials.breadcrumbs',['title'=>$page->title, 'titleLink' => '/blog', 'subtitle' => $blog->title])
      </div>
  </section>

  <section class="blog-inner">
    <div class="container">
      <div class="page-title">{{$blog->title}}</div>
      <div class="blog-content">
        <div class="blog-date">{{date('d/m/Y', strtotime($blog->created_at))}}.</div>
        {{-- <div class="blog-title">{{$blog->title}}</div> --}}
        <div class="blog-img">
            <img src="{{\Voyager::image($blog->image)}}" alt="{{$blog->title}}">
        </div>
        <div class="blog-source">Фото: @if($blog->image_source) {{$blog->image_source}} @else источник @endif</div>
        <div class="blog-text">
          {!!$blog->content!!}
        </div>
      </div>
    </div>
  </section>

@endsection