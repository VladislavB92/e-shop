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
                <th scope="col">Free shipping</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <th scope="row">{{ $product->name }}</th>
                <th scope="row">{{ $product->size }}</th>
                <th scope="row">€{{ $product->price }}</th>
                <th scope="row">{{ $product->free_shipping }}</th>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection