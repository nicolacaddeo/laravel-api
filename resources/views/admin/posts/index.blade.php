<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('admin.posts.show', $post->slug) }}">{{ $post->title }} </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
