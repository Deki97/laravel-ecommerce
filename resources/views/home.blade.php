{{-- Home andrà ad estendere il layout di base con header e footer fissi --}}
{{-- Ciò che cambia sarà il contenuto del main, motivo per il quale utilizzo lo yield --}}
@extends('layouts.app')

@section('page_title')
Prodotti - Home
@endsection

@section('main_section')
    <div class="container">
        <div class="welcome-text">
            <h2>
                Benvenuto nella pagina <span class="highlighted"> Gli imperdibili di Oggi</span>.<br>
                In questa sezione potrai acquistare tantissimi articoli accuratamente selezionati da noi, in base alle offerte più allettanti e alle preferenze dei nostri clienti.
            </h2>
        </div>
    
        <div class="products">
            @foreach ($products as $product)
                <div class="single-product">
                    <div class="image_url">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                    </div>
    
                    <div class="brand_url">
                        <img src="{{ $product->brand_url }}" alt="">
                    </div>
    
                    <div class="name">
                        {{ $product->name }}
                    </div>
    
                    <div class="feedback_number">
                        <div class="star-icon">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>

                        <div class="number">
                            {{ $product->feedback_number }}
                        </div>
                    </div>
    
                    <div class="delivery">
                        {{ $product->delivery }}
                    </div>
    
                    <div class="price">
                        {{ $product->price }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection