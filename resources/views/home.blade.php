@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                <th>
                                    <form action="/posts/{{$post->id}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-sm btn-danger btn-block" type="submit">Delete Post</button>
                                            
                                    </form>
                                </th>
                            </tr> 
                        @endforeach

                        
                    </table>
                    @else
                        <p>No Post Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
