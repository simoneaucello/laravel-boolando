@extends('layout.main')

@section('content')
    <div class="container d-flex flex-wrap ">

        @foreach ($products as $product)
            <div class="sa_card">
                <div class="sa_card_top">
                    <img class="front-img" src="/img/{{ $product['frontImage'] }}" alt="">
                    <img class="hover-img" src="/img/{{ $product['backImage'] }}" alt="">



                </div>
            </div>
        @endforeach

    </div>
@endsection
