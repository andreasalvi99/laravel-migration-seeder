<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel trains</title>
</head>
<body>

    <section>
        <div class="container p-4 share-tech-mono-regular playfair-display">
            <div class="row row-cols-1 g-3">
                    @foreach ($trains as $train)
                         <div class="col">
                            <div class="card h-100 p-2">
                                <div class="d-flex justify-content-around text-center w-100">
                                    <div class="d-flex flex-column align-items-center justify-content-around gap-2 flex-fill w-25">
                                         <small class="fw-semibold">Compagnia</small>
                                        <p>{{$train['company_name']}}</p>
                                        <small class="fw-semibold">Codice</small>
                                        <p class="m-0">{{$train['train_code']}}</p>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-around gap-2 flex-fill w-25">
                                        <small class="fw-semibold">Da</small>
                                        <p>{{$train['departure_station']}}</p>
                                        <small class="fw-semibold">A</small>
                                        <p class="m-0">{{$train['arrival_station']}}</p>
                                    </div>
                                    <div class="d-flex flex-column align-items-center gap-2 justify-content-around flex-fill w-25">
                                        <small class="fw-semibold">Partenza</small>
                                        <p>{{$train['departure_time']}}</p>
                                        <small class="fw-semibold">Arrivo</small>
                                        <p class="m-0">{{$train['arrival_time']}}</p>
                                    </div>
                                    <div class="d-flex flex-column align-items-center gap-2 justify-content-around flex-fill w-25">
                                        <small class="fw-semibold">Carrozze</small>
                                        <p>{{$train['carriage_count']}}</p>
                                        <small class="fw-semibold">Ritardo</small>
                                        @if ($train['is_delayed'])
                                            <p class="m-0">SI</p>
                                        @else
                                            <p class="m-0">NO</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
    
</body>
</html>