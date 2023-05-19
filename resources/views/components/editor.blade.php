<div class="col-12 col-md-12 mb-3">
    <textarea name="texto" class="form-control align-textarea editor"  id="texto" placeholder="Digite o texto" style="margin-bottom:0">
        {{ old('texto') }}
    </textarea>
    @error('texto')
    <span class="text-danger"><small>{{ $message }}</small></span>
    @enderror

</div>
