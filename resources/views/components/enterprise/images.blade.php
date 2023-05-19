<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center f-24 f-600 pb-5">Fotos dos
                @if (!empty($dataEnterprise->apartments->count()))apartamentos @endif
                @if (!empty($dataEnterprise->apartments->count()) && !empty($dataEnterprise->lands->count())) e @endif
                @if (!empty($dataEnterprise->lands->count()))terrenos @endif
            </h2>

            <hr>
        </div>
    </div>
    <div class="row py-4">
        @foreach($dataEnterprise->images->where('type', 0) as $image)
            <a href="{{asset($image->image)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-6 col-md-6 col-lg-4 mb-3">
                <img src="{{asset($image->image)}}" alt="Imagem do apartamento" class="img-fluid rounded-3">
            </a>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="#" id="carregar-mais" class="color-verde f-18 text-center">Ver mais imagens</a>
        </div>
    </div>
</div>
