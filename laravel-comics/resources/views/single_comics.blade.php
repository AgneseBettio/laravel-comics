@extends('layout.default')

@section('page_title', 'Dettagli fumetto')
@dump($comics)
@section("main_content")


<section class="bg-blue">
    <div class="container">
        <div class="blue-banner">
            <div class="img-box">
               <img src="{{ $comics['thumb'] }}" alt=""> 
            </div>            
        </div>
    </div>
</section>


<div class="container">
   
    <div class="prod-main-box">
        <div class="prod-title">
           <h3 class="dark-blue-tx"> {{ $comics["title"] }} </h3> 
        </div>
        <div class="price-box">
            <div>
                <span class="l-green-tx">U.S Price:</span> <span class="left-marg white-tx">{{ $comics["price"] }}</span> 
            </div>
            <div class="blank-space">
            </div>
            <div>
                <p class="l-green-tx">AVAILABLE</p>
            </div>
            <div class="left-marg">
                <a href="#" class="white-tx">
                    Check Availability <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                </a>                            
            </div>
        </div>
        <div class="prod-description">
            <p>
                {{$comics["description"] }}
            </p>
        </div>
    </div>
    <div class="adv-box left-marg">
        <h4>advertisement</h4>
        <div class="img-adv-box">
            <img src="{{ asset('images/adv.jpg') }}" alt="adv contest">
        </div>
    </div>
</div>
<div class="bg-gray">
    <div class="container">
        <div class="half-pg table-box">
            <div>
                <h4 class="dark-blue-tx">Talent</h4>
            </div>
            <div class="d-flex">
                <div class="left-table"> 
                    <p class="dark-blue-tx"><strong>Art by</strong></p> 
                </div>
                <div>
                    <ul>
                        @foreach($comics["artists"] as $artist)
                            <li class="d-inline-b blue-tx">
                                {{$artist}} <span>,</span>                         
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-flex">
                <div class="left-table">
                    <p class="dark-blue-tx"><strong>Written by:</strong></p> 
                </div>
                <div>
                    <ul>
                        @foreach($comics["writers"] as $writer)
                            <li class="d-inline-b blue-tx">
                                {{$writer}}                         
                            </li>
                        @endforeach
                    </ul>              
                </div>
            </div>
        </div>
        <div class="half-pg table-box">
            <div>
                <h4 class="dark-blue-tx">Specs</h4>
            </div>
            <div class="d-flex">
                <div class="left-table"> 
                    <p class="dark-blue-tx"><strong>Series:</strong></p>
                </div>
                <div>
                    <p class="blue-tx">{{$comics['type']}}</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="left-table"> 
                    <p class="dark-blue-tx"><strong>U.S Price:</strong></p>
                </div>
                <div>
                    <p>{{$comics['price']}}</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="left-table"> 
                    <p class="dark-blue-tx"><strong>On sale date:</strong></p>
                </div>
                <div>
                    <p>{{$comics['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pre_footer')
 <section class="commerce-section gray">
    <div class="container dark-tx">
        <div class="commerce-section-box">
            <div class="commerce-service">
                <h5>digital comics</h5>
            </div>
            <div class="img-box">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
            </div>
        </div>
        <div class="commerce-section-box">
            <div class="commerce-service">
                <h5>shop DC</h5>
            </div>
            <div class="img-box">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
            </div>
        </div>
        <div class="commerce-section-box">
            <div class="commerce-service">
                <h5>comic shop locator</h5>
            </div>
            <div class="img-box">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
            </div>
        </div>
        <div class="commerce-section-box">
            <div class="commerce-service">
                <h5>subscription</h5>
            </div>
            <div class="img-box">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
            </div>
        </div>
    </div>
 </section>
@endsection