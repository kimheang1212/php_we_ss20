<h1>The user id is: {{ $id }}</h1>

<form action="/user/{{ $id }}" method="post">
    @csrf
    @method("PUT")
    <input type="text" name="username" id="username">
    <input type="submit" value="Submit">

</form>