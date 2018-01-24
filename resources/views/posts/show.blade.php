@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>
    {{ $post->body }}

    <div class="comments">
        <ul class="list-group">
            @foreach( $post->comments as $comment )
            
            <li class="list-group-item">
             <p>
                <small>{{ $comment->created_at->diffForHumans() }} </small>
                | &nbsp; {{ $comment->body }}
                </p>
             </li>
            
            @endforeach
        </ul>         
    </div> 
    <hr>
    <div class="comments-form">

            @include('layouts.errors')

            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="body">Comments</label>
                        <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

    </div>


    

</div>    

@endsection