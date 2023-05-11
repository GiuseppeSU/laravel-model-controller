<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="my_container">
    <h1 class="text-center mt-5 mb-5 text-light">PEPFLIX</h1>
    <div class="container w-50 ">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card  m-3 ">
                        <img src="https://vignette2.wikia.nocookie.net/logopedia/images/b/b2/NetflixIcon2016.jpg/revision/latest/scale-to-width-down/2000?cb=20160620223003"
                            class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $movie->title }} </p>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
