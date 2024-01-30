@extends("template.master")

@section("myTitleBlock")
    
@endsection

@section("myHeaderBlock")
    
@endsection

@section("myNavBlock")
    
@endsection

@section("myContentBlock")
    <h1 style="color: #0084ff;  padding: 20px;
                background-color: orange; color: white;">
        Welcome to Page 1 <br><br>

        {{ $a + $b }}
    </h1>
    
@endsection

@section("myFooterBlock")
    
@endsection