@extends('layouts.app')

@section('content')
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('tags.create') }}" class="btn btn-sm btn-success mb-3">Add Tag</a>
    </div>
    
    <div class="card">
        <div class="card-header">
            Tags
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
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <div class="text-center">
                                   {{ $tag->posts->count() }}
                                </div>                                
                            </td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger" onclick="handleTagDelete({{ $tag->id }})">
                                        Delete
                                    </button>
                                </div>                                
                            </td>
                        </tr>
                        @include('includes.modals.tags')
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection