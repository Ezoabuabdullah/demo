<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title> welcome </title>
</head>
<body>
    <h1> HI  {{ $myname }}!</h1>
    <p> age: {{ $age }} year.</p>

    <h3>hobbies:</h3>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    @if($age >= 18)
        <p>you can join to  website </p>
    @else
        <p> sory you cant join to the website  </p>
    @endif

</body>
</html>
