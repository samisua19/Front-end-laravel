<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($users as $user)
<a href="/posts/{{ $user->id }}">
	{{ $user->name }}
</a>

<br>
@endforeach
</body>
</html>