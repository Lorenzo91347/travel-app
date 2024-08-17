<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<body class="welcome-background d-flex">

    <div class="container text-center text-white white-back">
        <h3>ENTER YOU CREDENTIALS</h3>
        <form action="POST" action="{{ route('login') }}">
            @csrf
        </form>
    </div>

</body>

</html>
