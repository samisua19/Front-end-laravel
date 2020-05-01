<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($posts as $post)
<a href="/posts/{{ $post->id }}">
	{{ $post->name }}
</a>

<br>
@endforeach
</body>
</html>