<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        svg{
            max-width: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Paginated Posts</h1>
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
         <p>{{$post->body}}</p>
         
    @endforeach

    {{$posts->links()}}
</body>
</html>