@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <div>
            <h3>{{ $product->name }}</h3>
            <p>€{{ $product->price }}</p>
        </div>
    </div>
@endsection