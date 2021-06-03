<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3-6</title>
</head>
<body>
    <header>header</header>
    <ul>

        @foreach ($car as $item)
        <li>

            {{$item -> name}}
            {{$item -> model}}
            {{$item -> kW}}
            <div>
                {{$item -> brand -> nationality}}
            </div>
            <div>
                @foreach ($item -> pilots as $pilot)

                {{$pilot -> name}}
                @endforeach

            </div>
        </li>
        @endforeach
    </ul>
    <footer>footer</footer>
</body>
</html>
