@extends('layouts.app')

@section('content')

@include('inc.messages')
    
    <h1>{{$posts->title}} </h1>
    
    <h3> {{$posts->body}} </h3>
    <small>written on {{$posts->created_at}} by {{$posts->user->id}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <div class="row">
                <div class="col-md-3">
                    <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>
                </div>

                <div class="col-md-3">
                    <form action="/posts/{{$posts->id}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-sm btn-danger btn-block" type="submit">Delete Post</button>
                            
                    </form>
                </div>
            </div>
        @endif
    @endif   
       
@endsection