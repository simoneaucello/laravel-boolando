@extends('layout.main')

@section('content')
    <div class="container d-flex flex-wrap ">

        @foreach ($products as $product)
            <div class="sa_card">
                <div class="sa_card_top">
                    <img class="front-img" src="/img/{{ $product['frontImage'] }}" alt="">
                    <img class="hover-img" src="/img/{{ $product['backImage'] }}" alt="">

                    <div class="wishlist">&hearts;</div>

                    <div class="badges">
                        @foreach ($product['badges'] as $badge)
                            @if ($badge['type'] === 'discount')
                                <span class="discount"> {{ $badge['value'] }} </span>
                            @else
                                <span class="tag"> {{ $badge['value'] }} </span>
                            @endif
                        @endforeach
                    </div>

                    <div class="bottom-card">
                        <div class="brand">{{ $product['brand'] }}</div>
                        <div class="product">{{ $product['name'] }}</div>
                        <div>
                            <span class="sale-price"> {{ $product['price'] }} &euro;</span>
                            <span class="previous"></span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
