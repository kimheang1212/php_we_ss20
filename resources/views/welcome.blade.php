@if (session()->has('id') && session()->has('name'))
    Id: {{ session('id') }} <br>
    Name: {{ session('name') }}
@endif