@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Product</h1>
             <div class="btn-group mr-2">
                    <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">All Products</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="post" action="{{ route('product.store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="name">Product Name:</label>
                      <input type="text" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                      <label for="price">Product Category :</label>
                      <select class="form-control" name="category_name">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                      </select>                    
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="quantity" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

@endsection
