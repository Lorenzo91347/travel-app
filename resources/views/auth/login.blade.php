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

    <div class="mx-auto text-center text-white tran-back d-flex flex-column justify-content-center">
        <div class="d-flex flex-column mb-5 auth-block">
            <h2>ENTER YOU CREDENTIALS</h2>
            <form class="mx-auto" action="POST" action="{{ route('login') }}">
                @csrf

                <input class="form-control form-control-lg my-3 text-center rounded-pill" type="text"
                    placeholder="USERNAME" aria-label=".form-control-lg example">
                <input class="form-control form-control-lg my-3 text-center rounded-pill" type="text"
                    placeholder="PASSWORD" aria-label=".form-control-lg example">
                <div><a href="{{ route('login') }}" class="btn btn-primary my-1 rounded-pill w-50">GET ME IN!</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
