@extends('layouts.base')

@section('page-title')
    DC-Comics
@endsection

@section('page-content')
    <div class="home-page">
        <div class="container">
            <div class="comics">
                <div class="comics__grid">
                    @foreach($comics as $comic)
                        <a class="comic-card" href="/">
                            <img class="comic-card__thumbnail" src="{{ $comic['thumb'] }}" alt="" />
                            <span class="comic-card__title">{{ $comic['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
