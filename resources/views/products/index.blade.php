@extends('layout.main')
@section('title', 'Produits')

@section('content')
    <div class="row row-cols-4 g-3">
        @forelse ($products as $p)
            <div class="col">
                <div class="card">
                    @isset($p['image'])
                        <img src="{{ asset($p['image']) }}" class="card-img-top" alt="{{ $p['title'] }}">
                    @else
                        <img src="{{ asset('images/product.png') }}" class="card-img-top" alt="{{ $p['title'] }}">
                    @endisset
                    <div class="card-body">
                        <h5 class="card-title">{{ $p['title'] }}</h5>
                        <p class="card-text">{{ $p['description'] }}</p>
                        {{-- <a href="{{route('products.show',['id' => $p['id']])}}" class="btn btn-primary">Voir plus</a> --}}
                        <x-button 
                            :href="route('products.show',['id' => $p['id']])" 
                            label="Voir plus"
                        />
                    </div>
                </div>
            </div>

        @empty
            <p class="text-body-danger text-center p-3">
                Aucun produit trouvé
            </p>
        @endforelse

    </div>
@endsection
