@extends('template.master')
@section('myContentBlock')
    <form action="{{ route('article.update', $article['id']) }}" 
    method="post" style="width: 400px; margin: 10px auto;">

        @csrf
        @method("put")
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ $article['title'] }}" placeholder="Enter title: "><br><br>

        <label for="description">Description: </label><br>
        <textarea name="description" id="description" 
            placeholder="Enter description: " cols="30" 
            rows="10">{{ $article['description'] }}</textarea><br><br>

        <input type="submit" value="Submit" name="buttonSubmit">
        <input type="reset" value="Reset Form" name="buttonReset">
    </form>
@endsection