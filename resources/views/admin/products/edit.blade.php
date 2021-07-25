@extends('layouts.app')

@section('content')
<div class="container_large">

    <h2 class="mt-5 mb-3">Modifica prodotto: {{ $product->name }}</h2>

    {{-- ERRORS DISPLAY --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- END ERRORS DISPLAY --}}

    {{-- CREATE FORM DISPLAY --}}
    <form class="mb-5" action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label for="descriptionn">Descrizione</label>
            <textarea name="description" class="form-control" cols="30" rows="10" id="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}">
        </div>
        
        <div class="form-check">            
            @if ($errors->any())
                <input type="checkbox" class="form-check-input" name="visibility" id="visibility" {{ old('visibility') ? 'checked=' : '' }}/>
            @else
                <input type="checkbox" class="form-check-input" name="visibility" id="visibility" {{ $product->visibility == 1 ? 'checked=' : '' }}/>
            @endif 
            <label for="visibility" class="form-check-label">Visibile</label>
        </div>        

        <div class="form-group my-3">            
            <label for="cover" class="d-block">Foto</label>
            <input type="file" class="" name="cover" id="cover">            
        </div>

        <div class="preview-image">
            {{-- Anteprima immagine presente --}}
            @if ($product->cover)
                <div>
                    <h3>Anteprima immagine corrente</h3>

                    <div class="container-image">
                        @if ($product->path_load_image)
                            <img src="{{ asset('storage/' . $product->cover) }}" alt="{{ $product->name }}">
                        @else
                            <img src="{{ $product->cover }}" alt="{{ $product->name }}">
                        @endif
                    </div>

                </div>
            @endif
        </div>        

        <input type="submit" class="btn btn-success" value="Modifica">

      </form>
      {{-- END CREATE FORM DISPLAY --}}

</div>
@endsection