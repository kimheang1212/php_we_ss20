<h1>Index Page of User</h1>

<a href="/user/create">Go to Create User Page</a>
<a href="/user/9">Go to Show Page</a>
<a href="/user/9/edit">Go to Edit Page</a>

<br><br>
<hr>
<br><br>
@foreach ($users as $user)
    {{ $user }} <br>
@endforeach