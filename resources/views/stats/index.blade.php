<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('storage/css/app.css')}}">

        <!-- Fonts -->
        <!-- link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .content {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <h1>Inventories stats</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Merk</th> 
                        <th scope="col">Produk</th>
                        <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats as $stat)
                            <tr>
                                <td>{{$stat->merk}}</td>
                                <td>{{$stat->produk}}</td>
                                <td>{{$stat->total}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img1.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img2.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img3.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img4.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px">
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img5.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img6.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img7.jpg')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('storage/img/img8.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
