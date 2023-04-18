<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Http Requests</title>
    <style>
        .red{
            color: red;
        }
    </style>
</head>
<body>
    <form action="{{route('store-requests')}}" method="post">
        @csrf
      <div>
        <p>Enter Name</p>
        <input type="text" name="name">
        @error('name')
            <span class="red">{{$message}}</span>
        @enderror
      </div>

      <div>
        <p>Enter Password</p>
        <input type="text" name="password">
        <input type="submit" >
      </div>

    </form>
</body>
</html>