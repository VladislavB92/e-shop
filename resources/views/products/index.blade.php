@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('products.create') }}" class="btn btn-dark btn-sm">
        Insert product for sale
    </a>

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
                    @if ($product->getStock() < 1) Out of stock @else {{ $product->getStock() }} units @endif </th>
                <th scope="row"> <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                        Edit
                    </a>
                </th>
                <th scope="row">
                    <form method="post" action="{{ route('products.destroy', $product) }}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
