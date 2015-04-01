@extends('app')

@section('content')
    <h1>Create a new Post</h1>

    <form action="/posts" method="POST">
        <input type="text" name="title" placeholder="The title of the post" />
        <textarea name="body" id="" cols="30" rows="10"
                  placeholder="The body for the post">
        </textarea>
        <input type="submit" value="Publish Post" />
    </form>

@stop