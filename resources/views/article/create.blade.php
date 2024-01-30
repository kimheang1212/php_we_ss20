@extends('template.master')
@section('myContentBlock')
    @if (session()->has('message'))
       
        {{ session('message') }}
    @endif

    <form action="{{ route('article.store') }}" method="post" style="width: 400px; margin: 10px auto;">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div style="color:red;">{{ $error }}</div>
            @endforeach
        @endif

        @csrf


        <label for="title">Please enter your password</label><br>
        <input type="text" name="password" id="password">
        @error('password')
            <div style="color:red;">
                @php
                    echo nl2br($message);
                @endphp
            </div>
        @enderror
        <br><br>

        <label for="title">Please enter your age</label><br>
        <input type="text" value="{{ old('age') }}" name="age" id="age" placeholder="Enter your age: ">
        @error('age')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="title">Title</label><br>
        <input type="text" value="{{ old('title') }}" name="title" id="title" placeholder="Enter title: ">
        @error('title')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="email">Email</label><br>
        <input type="text" value="{{ old('title') }}" name="email" id="email" placeholder="Enter email: ">
        @error('email')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="description">Description: </label><br>
        <textarea name="description" id="description" 
            placeholder="Enter description: " cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        <br><br>

        <input type="submit" value="Submit" name="buttonSubmit">
        <input type="reset" value="Reset Form" name="buttonReset">
    </form>
@endsection