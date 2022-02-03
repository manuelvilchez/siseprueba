@extends('layouts.app')
@section('title', 'Lista Usuarios')
    
@section('content')
    

    <div class="container mt-5">
    <h1 class="text-center">Comments
    @if (isset($post_title))
        de {{$post_title}}        
    @endif
    </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>id</td>
                <td>Post_id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Body</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->posts_id}}</td>
                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->body}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $comments->links() !!}
    </div>  
    </div>
@endsection