@extends('layouts.base')

@section('page-title')
    DC Comics
@endsection

@section('page-content')
    <div class="bg-dc-gray-700">
        <div class="relative w-3/4 mx-auto">
            <div class="absolute -mt-6 w-fit bg-dc-blue text-2xl font-bold text-white uppercase px-6 py-2">
                <span>Current Series</span>
            </div>

            <div class="flex flex-col pt-14 pb-4 space-y-8">
                <div class="grid grid-cols-3 gap-x-5 gap-y-14 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                    @foreach($comics as $idx => $comic)
                        <a class="space-y-2 w-full" href="{{ route('comic', ['id' => $idx]) }}">
                            <img class="aspect-square w-full object-cover object-top" src="{{ $comic['thumb'] }}" alt="">
                            <h3 class="text-white uppercase">
                                {{ $comic['series'] }}
                            </h3>
                        </a>
                    @endforeach
                </div>

                <button class="self-center bg-dc-blue px-16 py-2 text-sm text-white font-bold uppercase">
                    Load More
                </button>
            </div>
        </div>
    </div>
@endsection
