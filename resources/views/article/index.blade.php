<h2 style="background: green; color: white; padding: 20px;">
    Articles Listing
    <a href="{{ url("/article/create") }}" style="float: right; color: yellow; font-size: 14px; 
    background-color: brown; border: 1px solid white; padding: 8px 10px;
    text-decoration: none; font-family: sans-serif;">Add New Article</a>
</h2>
@foreach ($results as $result)
    
    Id: <small>{{ $result["id"] }}</small> <br><br>
    Title: <small><b>{{ $result["title"] }}</b></small> <br><br>
    Description: <small>{{ $result["description"] }}</small> <br><br>
    Created Date: <small>{{ $result["created_at"] }}</small> <br><br>
    <small>
        <a href="{{ route('article.edit', $result['id']) }}">Edit</a> | 
        <a href="{{ route('article.show', $result['id']) }}">View Detail</a>
        <form action="{{ route("article.destroy", $result['id']) }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="Delete" 
                style="background-color: transparent; border: none;">
        </form>
    </small> <br><br>

    <hr>
    <br><br>
@endforeach