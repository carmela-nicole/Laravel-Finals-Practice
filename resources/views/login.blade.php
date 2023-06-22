@extends('template.app')

@section('content')
<h1> Log In</h1>

@error('message')
{{$message}}
@enderror

<form action="{{route('login.submit')}}" method="post">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button>Log In</button>
    </div>
</form>

@endsection

@section('title')
<h1>Title</h1>
@endsection