@extends('layouts.base')

@section('page-title')
    DC Comics - {{ $comic['title'] }}
@endsection

@section('page-content')
    <div class="bg-dc-blue h-20">
        <div class="relative w-3/5 mx-auto">
            <div class="absolute -mt-56 border border-white">
                <div class="relative">
                    <a class="absolute top-0 left-0 bg-dc-cyan px-2" href="/">
                        <div class="text-xs text-white uppercase">{{ $comic['type'] }}</div>
                    </a>

                    <img src="{{ $comic['thumb'] }}" alt="">

                    <a class="absolute bottom-0 left-0 right-0 bg-dc-cyan" href="/">
                        <div class="text-sm text-white text-center uppercase">View Gallery</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="w-3/5 mx-auto py-20 flex">
            <div class="w-2/3">
                <h1 class="mb-4 text-3xl text-dc-blue-dark font-bold uppercase">{{ $comic['title'] }}</h1>

                <div class="mb-3 flex flex-row bg-dc-green border border-b-dc-green-dark divide-x divide-dc-green-dark">
                    <div class="flex justify-between items-center flex-grow px-6 py-3 font-semibold">
                        <div class="flex gap-x-2">
                            <p class="text-dc-green-light">U.S. Price:</p>
                            <p class="text-white">{{ $comic['price'] }}</p>
                        </div>
                        <p class="text-dc-green-light uppercase">Available</p>
                    </div>
                    <div class="flex items-center px-6 py-3 font-semibold">
                        <p class="text-white">Check Availability</p>
                    </div>
                </div>
                <p class="font-medium text-gray-500">{{ $comic['description'] }}</p>
            </div>

            <div class="w-1/3 flex flex-col justify-center items-end">
                <p class="font-bold text-gray-700 uppercase">Advertisement</p>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="bg-dc-gray-100 py-4 border-2 border-t-gray-100">
        <div class="w-3/5 mx-auto flex gap-x-12">
            <div class="w-2/4 divide-y">
                <h3 class="mb-4 text-2xl font-bold text-dc-blue-dark">Talent</h3>
                <div class="flex py-1">
                    <div class="w-1/3">
                        <span class="font-semibold text-dc-blue-dark">Art by:</span>
                    </div>
                    <div class="w-2/3">
                        @foreach($comic['artists'] as $artist)
                            <a class="font-semibold text-dc-cyan" href="/">{{ $artist }}</a>
                            @if (!$loop->last)
                                <span class="-ml-1">,</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex py-1">
                    <div class="w-1/3">
                        <span class="font-semibold text-dc-blue-dark">Written by:</span>
                    </div>
                    <div class="w-2/3">
                        @foreach($comic['writers'] as $writer)
                            <a class="font-semibold text-dc-cyan" href="/">{{ $writer }}</a>
                            @if (!$loop->last)
                                <span class="-ml-1">,</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-2/4 divide-y">
                <h3 class="mb-4 text-2xl font-bold text-dc-blue-dark">Specs</h3>
                <div class="flex py-1">
                    <div class="w-1/3">
                        <span class="font-semibold text-dc-blue-dark">Series:</span>
                    </div>
                    <div class="w-2/3">
                        <a class="font-semibold text-dc-cyan uppercase" href="/">{{ $comic['series'] }}</a>
                    </div>
                </div>
                <div class="flex py-1">
                    <div class="w-1/3">
                        <span class="font-semibold text-dc-blue-dark">U.S. Price:</span>
                    </div>
                    <div class="w-2/3">
                        <p>{{ $comic['price'] }}</p>
                    </div>
                </div>
                <div class="flex py-1">
                    <div class="w-1/3">
                        <span class="font-semibold text-dc-blue-dark">On Sale Date:</span>
                    </div>
                    <div class="w-2/3">
                        <p>{{ date('M d Y', strtotime($comic['sale_date'])) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
