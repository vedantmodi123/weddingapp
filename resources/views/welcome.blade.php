<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
</head>

<body>
    <div class="header">
        <form method="POST" action="{{ route('logout') }}">
            {{ csrf_field() }}
            <button class="button" type="submit">Log Out</button>
        </form>

    </div>
    <div class="main" style="margin-top: 18px">
        {{-- <img src="https://gal.proto.io/generated/7562839867cd022d6b2a4fac2263bffa_ffff7a.svg" style="margin-left: 40%"> --}}
        <ul class="cards">
            <li class="cards_item" onclick="window.location.href='{{ route('air.pickup') }}'">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/id/1026/500/300"></div>
                    <div class="card_content">
                        <h2 class="card_title">Pickup from Airport</h2>
                        <p class="card_text">We Provide service to pick your guest directly from Airport</p>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/id/113/500/300"></div>
                    <div class="card_content">
                        <h2 class="card_title">Gift Pickup</h2>
                        <p class="card_text">All the Hassel, put that on our own</p>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                    <div class="card_content">
                        <h2 class="card_title">Request Makeover Artist</h2>
                        <p class="card_text">Get your complete look on your special day</p>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                    <div class="card_content">
                        <h2 class="card_title">Request Photographer</h2>
                        <p class="card_text">Handpicked photographer, personalizes only for you.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <h3 class="made_by">Made with ♡</h3>
</body>

</html>