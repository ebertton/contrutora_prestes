@php $paginaNome = 'Post' ; @endphp
@include('site.components.header')
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@component('components.post.main-banner', ['post' => $post])
@endcomponent
<div class="row col-12 mt-5 d-flex justify-content-center">
    <div class="row col-10">
        <div class="col-sm-9 ps-5 mb-5">
            @component('components.post.post-detail', ['post' => $post])
            @endcomponent
        </div>
        <div class="col-sm-3">
            @component('components.post.recent-posts', ['recentPosts' => $recentPosts])
            @endcomponent
                <hr>
                @component('components.social-media')
                @endcomponent
        </div>
        <div class="col-sm-9 ps-5 mb-5">
            @component('components.post.read-more', ['similarPosts' => $similarPosts])
            @endcomponent
        </div>

    </div>

</div>



@component('components.blog.news-form')
@endcomponent
@include('site.components.footer')
