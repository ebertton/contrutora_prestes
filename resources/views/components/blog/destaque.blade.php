<div class="main_banner"
     style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url({{ $blog->url_banner }}) fixed center;">
    <div class="row">
        <div class="col-sm-4">
            <h1> {{ $blog->titulo }}</h1>
        </div>
        <div class="col-sm-8">
            <p>{{ $blog->descricao }}</p>
            <h6><strong>{{ $blog->breve_descricao }}</strong></h6>
        </div>


    </div>


    <div id="nextSection"
         class="position-absolute bottom-0 start-0 end-0 text-center d-flex justify-content-center">
        <a href="#list-post-blog" class="d-flex mb-5 flex-column">
            <img src="/assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
            <img src="/assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
            <img src="/assets/img/icon-nextsection.png" alt="next-section-img" srcset="">
        </a>
    </div>
</div>
