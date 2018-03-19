<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog_id</title>
</head>
<body>
<div class="container">
    @foreach ($articles as $article)
    	@if($article['id'] == $id)
        <h1 style="text-align: center;">{{$article->title}}</h1>
        <p>{{$article->content}}</p>
        <span>{{$article->image}}</span>
        @endif
    @endforeach
</div>
</body>
</html>