@extends('layout.default')
@section('page_title', 'homepage')
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
        @foreach($comicsList as $comic)
            <div class="card">
                <div class="img-card-box">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="title-card">
                    <h5>{{ $comic['title']}}</h5>
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
