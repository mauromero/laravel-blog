@extends('layouts.master')

@section('content')
<div class="col-sm-8">
    <h1>Create Post</h1>

    <form method="POST" action="/posts" >
    {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>

        @include('layouts.errors')

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>
    
@endsection