@extends('layouts.app')
@section('title', 'Lista Usuarios')
    
@section('content')
    

    <div class="container mt-5">
    <h1 class="text-center">Posts
    @if (isset($username))
        de {{$username}}        
    @endif
    </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>id</td>
                <td>UserId</td>
                <td>Title</td>
                <td>Body</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->users_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('comments.post', $post->id)}}">see comments</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $posts->links() !!}
    </div>  
    </div>
@endsection