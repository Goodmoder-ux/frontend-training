<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resourses/css/app.css">
    <title>Goodmoder's network | Home</title>
</head>
<body>
    <h2>Currently availables ninjas</h2>

    @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{$ninja["name"]}}</p>
                <a href="/ninjas/{{$ninja["id"]}}">View details</a>
            </li>
        @endforeach
    </ul>
    <a href="/">Go back!</a>
</body>
</html>