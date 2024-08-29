@extends('layouts.dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<main>
    @section('content')
        <div>this is the current page!</div>
        <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCd9JOqb8eKs4SWT5lCUAvNo_qiJyFMKh4
    &q=Space+Needle,Seattle+WA">
        </iframe>
    @endsection
</main>




</html>
