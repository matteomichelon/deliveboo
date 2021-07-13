@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Modifica il prodotto</h2>

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
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">

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
        
        <div class="form-group">
            <label for="visibility">Visibilità</label>
            @if ($errors->any())
                <input type="checkbox" class="form-control" name="visibility" id="visibility" {{ old('visibility') ? 'checked=' : '' }}/>
            @else
                <input type="checkbox" class="form-control" name="visibility" id="visibility" {{ $product->visibility == 1 ? 'checked=' : '' }}/>
            @endif 
        </div>

        <div class="form-group">
            <label for="cover">Foto</label>
            <input type="file" name="cover" id="cover">
        </div>

        <input type="submit" class="btn btn-success" value="Modifica">

      </form>
      {{-- END CREATE FORM DISPLAY --}}

</div>
@endsection