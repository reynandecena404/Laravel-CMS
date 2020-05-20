@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Edit Profile
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <ul>
                            <li>
                                {{ $error }}
                            </li>
                        </ul>                        
                    @endforeach
                </div>                
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif

            <form action="{{route('users.update-profile')}}" method="POST">
                @csrf

                @method('PUT')              

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                </div>
                
                <div class="form-group">
                    <label for="about">About Me</label>
                    <textarea class="form-control" name="about" id="about" cols="5" rows="10">{{$user->about}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-sm float-right">
                    Update User              
                </button>
            </form>
        </div>
    </div>

@endsection