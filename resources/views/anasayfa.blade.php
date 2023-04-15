<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    @php
    $yas = 29;
    @endphp

    @if($isim=='isa')
        Hoşgledin Patron <br>
    @elseif($isim=='baskan')
        Hoşgeldin Başkan <br>
    @else
        Hoşgeldin <br>
    @endif
<hr>
    @switch($isim)
        @case('baskan')
        Hoşgeldin baskan <br>
        @break

        @case('isa')
        Hoşgeldin İsa <br>
        @break

    @endswitch

    Merhaba {{$isim . ' ' . $soyisim}} , {{$yas}} yasındasın.



    </body>
</html>
