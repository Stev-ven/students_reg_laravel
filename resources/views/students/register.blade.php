<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Register Student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('student.save')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="first_name">Fisrt Name</label><br>
            <input type="text" name="first_name"> 
        </div>
        <div>
            <label for="first_name">Last Name</label><br>
            <input type="text" name="last_name"> 
        </div>
        <div>
            <label for="first_name">Email Address</label><br>
            <input type="text" name="email"> 
        </div>
        <div>
            <label for="first_name">Mobile</label><br>
            <input type="text" name="phone"> 
        </div>
        <div>
            <label for="first_name">Residential Address</label><br>
            <input type="text" name="address"> 
        </div>
        <div>
            <input type="submit" value="Register Student">
        </div>
    </form>
</body>
</html>