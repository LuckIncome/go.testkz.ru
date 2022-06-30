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

    <section class="about">
    <div class="about__banner"></div>
    <div class="container">
        <div class="about__title">{{ $page->title }}</div>
        <div class="about__top">
            {!! $page->body !!}
        </div>
    </div>
  	</section>

@endsection