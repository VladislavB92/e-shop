@extends('layouts.app')
@section('content')
<div class="container">
    <div class="back_button">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
    </div><br>

    <div>
        <form method="post" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the item" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Size of the item (S/M/L/XL)" value="{{ $product->size }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price of the item in Euros" value="{{ $product->getPrice() }}">
            </div>
            <div class="form-group">
                <label for="avalaible_quantity">How many items in stock?</label>
                <input type="text" class="form-control" id="avalaible_quantity" name="avalaible_quantity" placeholder="Quantity in warehouse" value="{{ $product->getStock() }}">
            </div>
            <div class="form-group">
                <label for="picture_url">Product's picture</label>
                <input type="text" class="form-control" id="picture_url" name="picture_url" placeholder="Copy product's picture URL" value="{{ $product->getPicture() }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
