@extends('template.app')

@section('content')
    <h1>Registration</h1>
    <form action="{{route('register.submit')}}" method="post">
        @csrf
        <div>
            <label for="name">Name
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input value="{{old('name')}}" type="text" name='name' id='name'>
           
        </div>
        <div>
            <label for="username">Username

                @error('username')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input value="{{old('username')}}" type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password
                @error('password')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button>Register</button>
        </div>
    </form>
@endsection

@section('title')
<h1>Title</h1>
@endsection