@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            {{isset($tag) ? 'Edit Tag' : 'Create Tag'}}
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

            <form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}" method="POST">
                @csrf

                @if (isset($tag))
                 @method('PUT')
                @endif                

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{isset($tag) ? $tag->name : ''}}">
                </div>
                <button class="btn btn-primary btn-sm float-right">
                    {{isset($tag) ? 'Update Tag' : 'Save Tag'}}                    
                </button>
            </form>
        </div>
    </div>

@endsection