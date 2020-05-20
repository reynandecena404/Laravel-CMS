@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            {{isset($category) ? 'Edit Category' : 'Create Categories'}}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>                
            @endif

            @include('includes.partials.errors')

            <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
                @csrf

                @if (isset($category))
                 @method('PUT')
                @endif                

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($category) ? $category->name : ''}}">
                </div>
                <button class="btn btn-primary btn-sm float-right">
                    {{isset($category) ? 'Update Category' : 'Save Category'}}                    
                </button>
            </form>
        </div>
    </div>

@endsection