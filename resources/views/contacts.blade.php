<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My contacts</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="antialiased">

    <h1>Hello World</h1>

    <p>If you want to get in touch with me, these are my contacts</p>
    <ul>
        @foreach ($contacts as $contact)
        <li>
            {{$contact}}
        </li>
        @endforeach
    </ul>

</body>

</html>