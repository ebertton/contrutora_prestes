@php $paginaNome = 'Blog' ; @endphp
@include('site.components.header')
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@component('components.blog.destaque', ['blog' => $blog])
@endcomponent

@component('components.blog.list-post', ['posts' => $posts])
@endcomponent

@component('components.blog.news-form')
@endcomponent

@include('site.components.footer')
