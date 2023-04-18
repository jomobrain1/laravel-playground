<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Builder</title>
    <style>
        .del{
            color: red;
        }
        .msg{
            position: fixed;
            right: 20px;
            top: 10px;
            background: #669900;
            color: aquamarine;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
<center>
    <h1>Query Builder Posts</h1> 
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <b><a  href="/query/post/{{$post->id}}">View</a></b>
        <a class="del" href="/query/delete-post/{{$post->id}}">Delete</a>
    @endforeach

    <hr>
    <h3>Add Posts</h3>
    @if (Session::has("msg"))
    <section class="msg">
        {{Session("msg")}}
    </section>  
    @endif
    <form action="{{route('store.posts')}}" method="post">
        @csrf
        
    <div>
        <h6>Enter title</h6>
        <input type="text" name="title">
    </div>

    <div>
        <h6>Enter body</h6>
        <input type="text" name="body">
    </div>
     <input type="submit">
    </form>

</center>
</body>
</html>