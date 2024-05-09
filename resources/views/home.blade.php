@extends('layout.main')

@section('content')
    <div class="container d-flex">

        @foreach ($products as $product)
            <div class="sa_card">
                <div class="card-top">
                    <img src="/img/{{ $product['frontImage'] }}" alt="">

                </div>
            </div>
        @endforeach

    </div>
@endsection
