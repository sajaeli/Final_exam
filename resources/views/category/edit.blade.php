@extends('layouts.app')

@section('content')


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Category</h1>
             <div class="btn-group mr-2">
                    <a href="all_categories.html" class="btn btn-outline-secondary">All Categories</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="post" action="{{ route('category.update',$category->id) }}">
                    <div class="form-group">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <label for="name">Category Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}" />
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

@endsection
