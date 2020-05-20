@extends('layouts.app')

@section('content')
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-success mb-3">Add Category</a>
    </div>
    
    <div class="card">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>
                            <div class="text-center">
                                Post Count
                            </div>  
                        </th>
                        <th>
                            <div class="float-right">
                                Action
                            </div>                           
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="text-center">
                                    {{ $category->posts->count() }}
                                </div>                                
                            </td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger" onclick="handleDelete({{ $category->id }})">
                                        Delete
                                    </button>
                                </div>                                
                            </td>
                        </tr>
                        @include('includes.modals.categories')
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection