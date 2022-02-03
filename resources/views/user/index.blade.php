@extends('layouts.app')
@section('title', 'Lista Usuarios')
    
@section('content')
    

    <div class="container mt-5">
    <h1 class="text-center">Users</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>CompanyName</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->company_name}}</td>
                <td>
                    <a href="{{route('posts.user', $user->id)}}">See posts</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $users->links() !!}
    </div>  
    </div>
@endsection