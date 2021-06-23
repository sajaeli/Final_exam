@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">All Order</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{ route('order.create') }}" class="btn btn-outline-secondary">Add New Order</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>category_name</th>
                      <th>product_name</th>
                      <th>product_quantity</th>
                      <th width="280px">Actions</th>
                  </tr>
                  @foreach ($orders as $order)
                    
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->category_name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->product_quantity }}</td>
                        <td>
                    <a class="btn btn-info" href="{{ route('order.edit',$order->id) }}">
                        Edit
                    </a>
                    <form action="{{ route('order.destroy', $order->id) }}" method="post" style="display: inline-block">
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
