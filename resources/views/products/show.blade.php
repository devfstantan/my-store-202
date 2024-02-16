@extends('layout.main')
@section('title', $product['title'])

@section('content')
    <div class="row">
        <div class="col-md-6">
            @isset($product['image'])
                <img src="{{ asset($product['image']) }}" class="img-fluid" alt="{{ $product['title'] }}">
            @else
                <img src="{{ asset('images/product.png') }}" class="img-fluid" alt="{{ $product['title'] }}">
            @endisset
        </div>
        <div class="col-md-6">
            <h1>{{ $product['title'] }}</h1>
            <p>{{ $product['description'] }}</p>
            <div class="d-flex justify-content-between align-items-baseline">
                {{-- <span class="display-5">{{ $product['price'] }} MAD</span> --}}
                <x-price  :value="$product['price']"  />
                <span @class([
                    'badge rounded-pill',
                    'text-bg-success' => $product['stock'] >= 10,
                    'text-bg-warning' => $product['stock'] > 0 && $product['stock'] < 10,
                    'text-bg-danger' => $product['stock'] <= 0,
                ])>
                    @if ($product['stock'] >= 10)
                        {{ $product['stock'] }} unités
                    @elseif($product['stock'] > 0)
                        {{ $product['stock'] }} unités (En rupture de stock)
                    @else
                        Hors Stock
                    @endif
                </span>
            </div>
        </div>

    </div>
@endsection
