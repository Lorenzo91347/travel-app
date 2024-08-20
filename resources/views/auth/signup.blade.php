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
            <h2>CREATE YOUR CREDENTIALS</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="mx-auto" method="POST" action="{{ route('signup') }}">
                @csrf
                <input class="form-control form-control-lg my-3 text-center rounded-pill" id="email" name="email"
                    type="email" placeholder="EMAIL" aria-label=".form-control-lg example">
                <input class="form-control form-control-lg my-3 text-center rounded-pill" id="name" name="name"
                    type="text" placeholder="USERNAME" aria-label=".form-control-lg example">
                <input class="form-control form-control-lg my-3 text-center rounded-pill" id="password" name="password"
                    type="password" placeholder="PASSWORD" aria-label=".form-control-lg example">
                <input class="form-control form-control-lg my-3 text-center rounded-pill" id="password_confirmation"
                    name="password_confirmation" type="password" placeholder="REPEAT PASSWORD"
                    aria-label=".form-control-lg example">
                <div>
                    <button type="submit" class="btn btn-primary my-1 rounded-pill w-50">ALL DONE!</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
