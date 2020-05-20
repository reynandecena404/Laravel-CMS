@extends('layouts.app')

@section('content')
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-success mb-3">Add Posts</a>
    </div>
    
    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body table-responsive">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>
                            Category
                        </th>
                        <th>
                            <div class="float-right">
                                Action
                            </div>                           
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td style="width: 120px;">   
                                <img src="{{asset('storage/'.$post->image)}}" width="120" height="60" alt="">
                            </td>
                            <td style="width: 150px;">
                                {{$post->title}}
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', $post->category->id) }}">
                                    {{$post->category->name}}
                                </a>                                
                            </td>
                            <td>
                                <div class="float-right">
                                    @if ($post->trashed())
                                        <form action="{{ route('restore-posts', $post->id) }}" method="POST" class="float-left mr-3">
                                            @csrf

                                            @method('PUT')

                                            <button type="submit" class="btn btn-sm btn-primary">Restore</button>
                                        </form>
                                        
                                        <button class="btn btn-sm btn-danger" onclick="handlePostDelete({{ $post->id }})">
                                            Delete
                                        </button>
                                    @else
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger" onclick="handleTrash({{ $post->id }})">
                                            Trash
                                        </button>
                                    @endif
                                </div>                                                             
                            </td>
                        </tr>
                        @include('includes.modals.posts')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection