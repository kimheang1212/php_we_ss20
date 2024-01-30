@extends("template.master")

@section("myTitleBlock")
    This is the title of my Article page
@endsection

@section("myHeaderBlock")
    <h1>This is my Header Block of Article page</h1>
@endsection

@section("myNavBlock")
    This is the Nav block of my Article page
@endsection

@section("myContentBlock")
    <h1 style="color: #0084ff;">This is the Content block of my Article page</h1>
    <h1>ID: {{ $id }}</h1>
    <h1>Name: {{ $name }}</h1>
@endsection

@section("myFooterBlock")
    This is the Footer block of my Article page
@endsection