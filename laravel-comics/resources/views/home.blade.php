@extends('layout.default')
@section('page_title', 'prodotti')
@section('main_content')
<div class="section-bg">
    <div class="container">
        <div class="section-title">
            <div class="title-label">
                <h3>current series</h3>
            </div>
        </div>
    </div>
    <div class="container card-container">
        @foreach($comicsList as $index => $comics)
            <div class="card">
                <div class="img-card-box">
                    <a href="{{ route('single_comics', ['index' => $index]) }}">
                        <img src="{{ $comics['thumb'] }}" alt="comics cover">
                    </a>                    
                </div>
                <div class="title-card">
                    <h5>{{ $comics['title']}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container text-centered">
        <div class="btn-box blue-def neg-margin-bt">
                <a href="#">
                    load more
                </a>  
            </div>
    </div>            
</div>
{{--  verifico path e accesso ai dati corretti: @dump($comicsList) --}}
@endsection
@section('pre_footer')
    <section class="commerce-section blue">
        <div class="container">
            <div class="commerce-section-box">
                <div class="img-box">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="e-book">
                </div>
                <div class="commerce-service">
                    <h5>digital comics</h5>
                </div>
            </div>
            <div class="commerce-section-box">
                <div class="img-box">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="e-book">
                </div>
                <div class="commerce-service">
                    <h5>dc merchandise</h5>
                </div>
            </div>
            <div class="commerce-section-box">
                <div class="img-box">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="e-book">
                </div>
                <div class="commerce-service">
                    <h5>subscription</h5>
                </div>
            </div>
            <div class="commerce-section-box">
                <div class="img-box">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="e-book">
                </div>
                <div class="commerce-service">
                    <h5>comic shop locator</h5>
                </div>
            </div>
            <div class="commerce-section-box">
                <div class="img-box">
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="e-book">
                </div>
                <div class="commerce-service">
                    <h5>dc power visa</h5>
                </div>
            </div>
        </div>
    </section>
@endsection