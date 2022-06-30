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
            @include('partials.breadcrumbs',[ 'title'=> $page->title ])
        </div>
    </section>

	<section class="contacts">
	    <div class="container">
	      <div class="page-title">{{$page->title}}</div>
	      <div class="contacts-content">
	        <div class="contacts-text">
	            <div class="contact-item">
	                <div class="contact-title">@lang('general.phone'):</div>
	                @foreach($phones as $phone)
	                    <div class="contact-info"> 
		                  	<a href="tel:+{{ preg_replace("/[^,.0-9]/", '', $phone->value) }}">
		                  		{{$phone->value}}
		                  	</a>
		                  	@if(!$loop->last)<br>@endif
	                    </div>
	                @endforeach
	            </div>
	            <div class="contact-item">
	                <div class="contact-title">E-mail:</div>
	                @foreach($emails as $email)
	                  <div class="contact-info"> 
	                  	<a href="{{$email->link}}">
	                  		{{$email->value}}
	                  	</a>
	                  	@if(!$loop->last)<br>@endif
	                  </div>
	                @endforeach
	            </div>
	            <div class="contact-item">
	                <div class="contact-title">@lang('general.adress'):</div>
	                <div class="contact-info"> 
	                	@foreach($adresses as $adress)
                    		<a href="{{$adress->link}}">{{ $adress->translate_value }}</a>
                  		@endforeach
	                </div>
	            </div>
	        </div>
	        <div class="contacts-map">
	            {!!$map->value!!}
	        </div>
	      </div>
	    </div>
	</section>

	@if($hide->hide_block == 0)
    	@include('partials.loops.mailing')
  	@endif

@endsection