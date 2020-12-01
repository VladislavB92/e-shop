@extends('layouts.app')
@section('content')
<div class="container">

    <div class="back_button">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
            Edit
        </a>
    </div><br>

    <div>
        <h2 style="font-weight:bold">{{ $product->name }}</h2>
        <h3>Price: €{{ $product->getPrice() }}</h3>
        <p>Package size: {{ $product->getSize() }}</p>
        <p> @if ($product->getStock() < 1) Out of stock @else In stock: {{ $product->getStock() }} @endif</p>
    </div>

    <div class="deliveries">
        Choose shipping option for the package size {{ $product->getSize() }}:
        <p>
            <ul>
                @foreach($product->deliveries as $delivery)
                <li>
                    <input type="radio" id="{{ $delivery->carrier }}" name="shipping_carrier" value="{{ $delivery->getPrice() }}">
                    <label for="shipping_carrier">{{ $delivery->carrier }} - {{ $delivery->getPrice() }}</label>
                </li>
                @endforeach
            </ul>

        </p>
    </div>
</div>
@endsection
