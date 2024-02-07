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
    <h1>Edit Student Info</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('student.update', ['student' => $student])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="first_name">Fisrt Name</label><br>
            <input type="text" name="first_name" value="{{$student->first_name}}"> 
        </div>
        <div>
            <label for="first_name">Last Name</label><br>
            <input type="text" name="last_name" value="{{$student->last_name}}"> 
        </div>
        <div>
            <label for="first_name">Email Address</label><br>
            <input type="text" name="email" value="{{$student->email}}"> 
        </div>
        <div>
            <label for="first_name">Mobile</label><br>
            <input type="text" name="phone" value="{{$student->phone}}"> 
        </div>
        <div>
            <label for="first_name">Residential Address</label><br>
            <input type="text" name="address" value="{{$student->address}}"> 
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>