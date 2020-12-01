@extends('layouts.app')
@section('content')
<div class="container">
    <div class="back_button">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
    </div><br>
    <div>
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the item">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Size of the item (S/M/L/XL)">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price of the item in Euros">
            </div>
            <div class="form-group">
                <label for="avalaible_quantity">Items in stock</label>
                <input type="text" class="form-control" id="avalaible_quantity" name="avalaible_quantity" placeholder="Quantity in warehouse">
            </div>
            <div class="form-group">
                <label for="picture_url">Product's picture</label>
                <input type="text" class="form-control" id="picture_url" name="picture_url" placeholder="Copy product's picture URL">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
