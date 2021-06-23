@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">All Products</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{ route('product.create') }}" class="btn btn-outline-secondary">Add New Product</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>category_name</th>
                      <th width="280px">Actions</th>
                  </tr>
                  @foreach ($products as $product)
                    
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>
                    <a class="btn btn-info" href="{{ route('product.edit',$product->id) }}">
                        Edit
                    </a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn btn-danger delete btn-sm" type="submit">
                            Delete
                        </button>
                    </form>
                        </td>
                    </tr>

                  @endforeach
              </tbody>
            </table>
        </div>

@endsection
