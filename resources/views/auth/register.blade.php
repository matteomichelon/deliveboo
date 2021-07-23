@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 margin-form-register">
            <div class="card">
                <div class="card-header">{{ __('Nuovo utente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @method('POST')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome ristorante') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                                @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="restaurant_address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo ristorante') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant_address" type="text" class="form-control @error('restaurant_address') is-invalid @enderror" name="restaurant_address" value="{{ old('restaurant_address') }}" required autocomplete="restaurant_address" autofocus>

                                @error('restaurant_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vat_number" class="col-md-4 col-form-label text-md-right">{{ __('P.IVA') }}</label>

                            <div class="col-md-6">
                                <input id="vat_number" type="text" class="form-control @error('vat_number') is-invalid @enderror" name="vat_number" value="{{ old('vat_number') }}" required autocomplete="vat_number" autofocus>

                                @error('vat_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Categorie del tuo ristorante</label>

                            <div class="col-md-6">
                                @foreach($categories as $category)

                                    <div class="form-check form-check-inline">
                                        <input 
                                            class="form-check-input {{ $errors->has('categories') && array_key_exists($category->id, old('categories', [])) && !in_array($category->id, old('categories', [])) ? 'is-invalid' : '' }}"
                                             name="categories[{{$category->id}}]" value="{{ $category->id }}" 
                                             id="categories" 
                                             type="checkbox" 
                                             {{ in_array($category->id, old('categories', [])) ? 'checked' : ''}}
                                        >                              
                                        <label class="form-check-label" for="categories[]">{{ $category->category }}</label>                                        
                                    </div>
                                    
                                @endforeach
                                   
                                @error('categories')
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-deliveboo-secondary">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
