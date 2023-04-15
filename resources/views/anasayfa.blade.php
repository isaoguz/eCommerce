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

    Merhaba {{$isim . ' ' . $soyisim}} , {{$yas}} yasındasın. <br>
<hr>

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

<hr>
    @for($i=0;$i<10; $i++)
        Döngü Değeri : {{$i}}
    @endfor

    <hr>
    @php
    $i=0
    @endphp
    @while($i<10)
        Döngü Değeri : {{$i}}
        @php
        $i++;
        @endphp
    @endwhile

    <hr>
    @foreach($isimler as $isim)
    {{$isim . ($isim !==end($isimler) ? ',' : '')}}
    @endforeach
<hr>
    @foreach($kullanicilar as $kullanici)
        @continue($kullanici['id']==1)
        <li>{{$kullanici['id'] . '-' . $kullanici['kullanici_adi']}}</li>
        @break($kullanici['id']==4)
    @endforeach


    </body>
</html>
