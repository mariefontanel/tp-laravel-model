<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        {{--MON CODE--}}
        <h1>Nos produits</h1>
        <ul>
            @foreach($mesproduits as $product)
                <li><strong>Produit :</strong> {{$product->name}} => {{$product->price}}
                    <ul>
                        @foreach($product->reviews as $avis)
                            <li><strong>Avis :</strong>{{$avis->text}}, publié par l'utilisateur dont l'id est le n° : {{$avis->user_id}} qui s'appelle {{$avis->user->name}}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

    </div>
</div>
</body>
</html>
