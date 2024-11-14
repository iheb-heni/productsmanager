@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Add Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="price">Price (RM)</label>
            <input type="number" class="form-control" name="price" step="0.01" required>
        </div>
        <div class="form-group mb-3">
            <label for="details">Details</label>
            <textarea class="form-control" name="details"></textarea>
        </div>
        <div class="form-group mb-3">
            <label>Publish</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="publish" value="1" id="publishYes">
                <label class="form-check-label" for="publishYes">Yes</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="publish" value="0" id="publishNo" checked>
                <label class="form-check-label" for="publishNo">No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
