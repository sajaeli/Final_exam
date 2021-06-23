@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        All Categories
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-outline-secondary" href="{{ route('category.create') }}">
                Add New Category
            </a>
        </div>
    </div>
</div>
<div class="btn-toolbar mb-2 mb-md-0">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th width="280px">
                    Actions
                </th>
            </tr>
            @foreach ($categorys as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('category.edit',$category->id) }}">
                        Edit
                    </a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post" style="display: inline-block">
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
