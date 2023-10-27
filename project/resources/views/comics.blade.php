@extends('layouts.app')

@section('content')
<main id="app_main">
    <section id="slider">
        <div class="current_series">
            <button><strong>CURRENT SERIES</strong></button>
        </div>

        <div class="films pt-5 pb-3 d-flex flex-column">
            <div class="container d-flex flex-wrap justify-content-around">
                @foreach ($products as $product)
                <div class="product">
                    <img src="{{$product['thumb']}}">
                    <p>{{$product['title']}}</p>
                </div>
                @endforeach
                <button><strong>LOAD MORE</strong></button>
            </div>
        </div>
    </section>






    <section id="main_card" class="py-4">
        <div class="d-flex align-items-center">
            <div class="col d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="me-2">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="me-2">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="me-2">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="me-2">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="me-2">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>




    <section id="main_body">
        <div class="d-flex text-white">
            <div class="col d-flex justify-content-start">
                <div class="col-3 d-flex flex-column">
                    <span class="my-2"><strong>DC COMICS</strong></span>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <span class="my-2"><strong>SHOP</strong></span>
                    <a href="#">element</a>
                    <a href="#">element</a>
                </div>

                <div class="col-3 d-flex flex-column">
                    <span class="my-2"><strong>DC</strong></span>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                </div>

                <div class="col-3 d-flex flex-column">
                    <span class="my-2"><strong>SITES</strong></span>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                    <a href="#">element</a>
                </div>
            </div>

            <div class="col logo">
            </div>
        </div>
    </section>
</main>
@endsection