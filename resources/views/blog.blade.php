<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
    @if(session('status'))
        {{session('status')}}
    @endif
   <h1>{{$blog->title}}</h1>
    <img src="storage/{{$blog->image}}" alt="image" style="max-width: 300px">
    <p>{{$blog->descpition}}</p>
    <a href="{{route('edit', ['blog'=>$blog->id])}}">Edit</a>
    <a href="{{url('delete', ['blog'=>$blog->id])}}">Delete</a>
</div>
</body>
</html>
