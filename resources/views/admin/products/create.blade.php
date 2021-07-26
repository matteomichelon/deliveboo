@extends('layouts.app')

@section('content')
<div class="container_large">

    <h2 class="mt-5 mb-3">Aggiungi un nuovo prodotto</h2>

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
    <form class="mb-5" action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('POST')

        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="descriptionn">Descrizione</label>
            <textarea name="description" class="form-control" cols="30" rows="10" id="description">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ old('price') }}">
        </div>
        
        <div class="form-check">            
            <input type="checkbox" class="form-check-input" name="visibility" id="visibility" {{ old('visibility') ? 'checked=' : '' }}/>
            <label for="visibility" class="form-check-label">Visibile</label>
        </div>      

        <div class="form-group my-3">            
            <label for="cover" class="d-block">Foto</label>
            <input type="file" class="" name="cover" id="cover">            
        </div>

        <input type="submit" class="btn btn-deliveboo-secondary" value="Aggiungi">

    </form>
    {{-- END CREATE FORM DISPLAY --}}

</div>
@endsection