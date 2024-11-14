@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Product Details</h2>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }} RM</p>
    <p><strong>Details:</strong> {{ $product->details }}</p>
    <p><strong>Published:</strong> {{ $product->publish ? 'Yes' : 'No' }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back </a>
</div>
@endsection
