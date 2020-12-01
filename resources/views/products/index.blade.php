@extends('layouts.app')
@section('content')
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Size</th>
                <th scope="col">Price</th>
                <th scope="col">In stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                </td>
                <th scope="row">{{ $product->size }}</th>
                <th scope="row">€{{ $product->price }}</th>
                <th scope="row">
                   @if ($product->getStock() < 1)
                       Out of stock  
                       @else
                       {{ $product->getStock() }} units
                   @endif 
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection