@extends('layouts.base')

@section('page-title')
    DC-Comics
@endsection

@section('page-content')
    <div>
        @foreach($comics as $comic)
            <p>{{$comic['title']}}</p>
        @endforeach
    </div>
@endsection
