<h2>{{ $article->title }}</h2>
<p>{{ $article->description }}</p>
Created Date: {{ $article->created_at }} 
Updated Date: {{ $article->updated_at }}
<br><br>
<form action="{{ route("article.destroy", $article->id) }}" method="post">
    @csrf
    @method("delete")

    <input type="submit" value="Delete">
</form>