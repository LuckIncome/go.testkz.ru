@extends('partials.layout')
@section('page_title', __('Страница не найдена'))
@section('seo_title',  __('Страница не найдена'))
@section('meta_keywords', __('Страница не найдена'))
@section('meta_description',  __('Страница не найдена'))
@section('image',env('APP_URL').'/images/og.jpg')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">@lang('general.dearUser')</div>
                <div class="mb-4 lead">@lang('general.notFoundTitle')</div>
                <div class="mb-4 lead">@lang('general.notFoundText')</div>
                <a href="/" class="btn btn-link">@lang('general.backToHome')</a>
            </div>
        </div>
    </div>
</div>

@endsection