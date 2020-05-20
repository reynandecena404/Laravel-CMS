@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            {{ isset($post) ? 'Edit Post' : 'Create Post' }}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Cannot save empty fields.
                    <ul>
                        @foreach ($errors->all() as $error)                    
                            <li>
                                {{ $error }}
                            </li>    
                        @endforeach
                    </ul>
                </div>                
            @endif

            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" class="postForm" enctype="multipart/form-data">
                @csrf       

                @if (isset($post))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : ''}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control">{{ isset($post) ? $post->description : ''}}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" class="form-control" value="{{ isset($post) ? $post->content : ''}}">
                    <trix-editor input="content"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control custom-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if (isset($post))
                                    @if ($category->id === $post->category_id)
                                        selected
                                    @endif
                                @endif >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @if ($tags->count() > 0)
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control custom-select" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    @if (isset($post))
                                        @if (in_array($tag->id, $post->tags->pluck('id')->toArray()))
                                            selected
                                        @endif  
                                    @endif
                                >
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif
                
                @if (isset($post))
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{asset('storage/'.$post->image)}}" class="img-fluid mt-2 mb-3">
                @else
                    
                @endif
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="form-control" id="image" name="image" >
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" class="form-control" id="published_at" name="published_at" value="{{ isset($post) ? $post->published_at : ''}}">
                </div>

                <button class="btn btn-primary btn-sm float-right">                        
                    {{ isset($post) ? 'Update Post' : 'Save Post ' }}          
                </button>
            </form>
        </div>
    </div>

@endsection