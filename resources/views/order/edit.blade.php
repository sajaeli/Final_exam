@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Order</h1>
             <div class="btn-group mr-2">
                    <a href="{{ route('order.index') }}" class="btn btn-outline-secondary">All order</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="post" action="{{ route('order.update',$order->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                      <label for="price">Category name:</label>
                      <select class="form-control" name="category_name">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                      </select>                    
                    </div>

                    <div class="form-group">
                      <label for="price">Product name :</label>
                      <select class="form-control" name="product_name">
                        @foreach ($products as $product)
                            <option value="{{ $product->name }}">{{ $product->name }}</option>
                        @endforeach
                      </select>                    
                    </div>

                    <div class="form-group">
                      <label for="price">Product quantity :</label>
                      <select class="form-control" name="product_quantity">
                        @foreach ($products as $product)
                            <option value="{{ $product->quantity }}">{{ $product->quantity }}</option>
                        @endforeach
                      </select>                    
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

@endsection
