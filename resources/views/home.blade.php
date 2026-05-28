<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel trains</title>
</head>
<body>

    <section>
        <div class="container">
            <div class="row row-cols-3 g-3">
                    @foreach ($trains as $train)
                         <div class="col">
                            <div class="card h-100">
                                <div class="d-flex justify-content-around">
                                    <div class="d-flex flex-column justify-content-around gap-2">
                                        <p>{{$train['company_name']}}</p>
                                        <p>{{$train['train_code']}}</p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around gap-2">
                                        <p>{{$train['departure_station']}}<p>
                                        <p>{{$train['arrival_station']}}</p>
                                    </div>
                                    <div class="d-flex flex-column gap-3 justify-content-around">
                                        <p>{{$train['departure_time']}}</p>
                                        <p>{{$train['arrival_time']}}</p>
                                    </div>
                                    <div class="d-flex flex-column gap-3 justify-content-around">
                                        <p>{{$train['carriage_count']}}</p>
                                        <p>{{$train['is_delayed']}}</p>
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