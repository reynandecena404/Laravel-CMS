@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-header">
            Users
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
                        <th>Profile Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>
                            <div class="float-right">
                                Action
                            </div>                           
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>    
                                <img src="{{ Gravatar::src($user->email) }}" class="profile_img rounded-circle">                                                   
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->role}}
                            </td>
                            <td>  
                                @if (!$user->isAdmin())
                                    <div class="float-right">
                                        <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">
                                                Make Admin
                                            </button>  
                                        </form>
                                    </div>   
                                @endif   
                                                                                                       
                            </td>
                        </tr>
                        @include('includes.modals.posts')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection