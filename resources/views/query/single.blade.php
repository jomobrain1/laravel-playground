<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
    <h2>This is the Single File</h2>
    @if (Session::has("msg"))
    <section class="msg">
        {{Session("msg")}}
    </section>  
    @endif
    <form action="{{route('update.post')}}" method="post">
        <input type="hidden" name="id" value="{{$post->id}}">
        @csrf    
        <p><input type="text" value="{{$post->title}}" name="title"></p>
        <b>
            <input type="text" value="{{$post->body}}" name="body">
        </b>
        <input type="submit">
    </form>
</body>
</html>