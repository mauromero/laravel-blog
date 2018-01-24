@extends ('layouts.master')

@section('content')

<div class="col-sm-8">
    <h1>Register</h1>

    @include('layouts.errors')

    <form method="POST" action="/register">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Password</label>
        <input type="input" class="form-control" id="name" placeholder="Name / Middle Name">
    </div>
    
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </form>

</div>

@endsection