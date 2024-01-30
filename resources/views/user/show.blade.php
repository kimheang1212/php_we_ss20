<h1>This is the Show Page</h1>

<form action="/user/9" method="post">
    @csrf
    @method("delete")
    <input type="submit" value="Delete" name="buttonSubmit">
</form>