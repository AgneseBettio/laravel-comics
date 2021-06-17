<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Hello World!</h1>
    <h2>Benvenuto <strong>{{ $name }} {{$surname}}</strong></h2>
    <p> il tuo ruolo è : {{$role}}</p>
    ecco il tuo team:
    <ul>
        <li><a href="{{route('team_sandro')}}"> Sandro </a></li>
        <li><a href="{{route('team_giorgio')}}"> Giorgio </a></li>
        <li><a href="{{route('team_alberto')}}"> Alberto </a></li>

    </ul>
</body>
</html>