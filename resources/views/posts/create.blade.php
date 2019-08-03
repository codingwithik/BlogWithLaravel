@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form class="form-horizontal" action="/posts" method="POST">

        {{ csrf_field() }}
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-sm-2 col-form-label">Body</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="body" name="body" cols="3">
            </textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <button class="btn btn-sm btn-primary btn-block" type="submit">Add Post</button>
            </div>   
        </div>
        
    </form>

@endsection