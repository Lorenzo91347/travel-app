<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<body class="welcome-background">
    <main>
        <div class="row h-100">
            <div class="col">
                <div class="cointainer text-center text-white p-5 welcome-left-col">
                    <h1 class="welcome-title">
                        TRAVEL RECORD
                    </h1>
                    <h3 class="my-4">
                        Your one-stop app to keep track of your outdoor adventures
                    </h3>
                    <div class="d-flex flex-column button-container">
                        <div><a href="{{ route('login') }}" class="btn btn-primary my-1 rounded-pill w-25">LOGIN</a>
                        </div>
                        <div><a href="{{ route('signup') }}" class="btn btn-primary my-2 rounded-pill w-25">SIGNUP</a>
                        </div>


                    </div>

                </div>
            </div>
            <div class="col welcome-right-col"></div>
        </div>

    </main>

</body>

</html>
