@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="price">Price (RM)</label>
            <input type="number" class="form-control" name="price" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="details">Details</label>
            <textarea class="form-control" name="details">{{ $product->details }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>Publish</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="publish" value="1" id="publishYes" {{ $product->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publishYes">Yes</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="publish" value="0" id="publishNo" {{ !$product->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publishNo">No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
