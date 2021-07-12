@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Aggiungi un nuovo prodotto</h2>

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

    <form action="{{route('user.products.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('POST')

        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="descriptionn">Descrizione</label>
            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" name="price">
        </div>

        <div class="form-group">
            <label for="SKU">SKU</label>
            <input type="text" class="form-control" name="SKU">
        </div>
        
        <div class="form-group">
            <label for="visibility">Visibile</label>
            <input type="checkbox" class="form-control" name="visibility" value="1">
            <input type="hidden" name="visibility" value="0" />
        </div>

        <div class="form-group>
            <label for="cover">Foto</label>
            <input type="file" name="cover">
        </div>

        <input type="submit" class="btn btn-success" value="Aggiungi">

      </form>
</div>
@endsection