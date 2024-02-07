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
    <h1>Sudents</h1>
    <div>
       @if(session()->has('succsess')) 
       <div>
           {{session('succsess')}}
       </div>
       @endif
    </div>
    <div>
        <div>
            <a href="{{route('student.register')}}">Register New Student</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th className="text-green-400">Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Residential Address</th>
                <th>Edit student info</th>
                <th>Remove Student</th>
            </tr>
            @foreach($students as $student)
                 <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td><a href="{{route('student.edit', ['student' =>$student])}}">Edit</a></td>
                    <td>
                        <form action="{{route('student.delete', ['student' => $student])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Remove Student">
                        </form>
                    </td>
                 </tr>
            @endforeach
        </table>
    </div>
</body>
</html>