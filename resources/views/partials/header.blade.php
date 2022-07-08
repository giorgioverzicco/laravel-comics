@php
    $links = [
        [
            'name' => 'Home',
            'url' => 'home'
        ],
        [
            'name' => 'Characters',
            'url' => ''
        ],
        [
            'name' => 'Movie',
            'url' => ''
        ],
        [
            'name' => 'Tv',
            'url' => ''
        ],
        [
            'name' => 'Games',
            'url' => ''
        ],
        [
            'name' => 'Collectibles',
            'url' => ''
        ],
        [
            'name' => 'Videos',
            'url' => ''
        ],
        [
            'name' => 'Fans',
            'url' => ''
        ],
        [
            'name' => 'News',
            'url' => ''
        ],
        [
            'name' => 'Shop',
            'url' => ''
        ],
    ];
@endphp

<header>
    {{--  Top Header  --}}
    <div class="bg-dc-blue">
        <div class="w-3/4 mx-auto py-1">
            <div class="flex justify-end items-center gap-x-12 text-white text-xs font-medium uppercase">
                <span>DC Power&trade; Visa&reg;</span>
                <span>Additional DC Sites &#9660;</span>
            </div>
        </div>
    </div>

    {{--  Header Main  --}}
    <div class="bg-white">
        <div class="w-3/4 mx-auto py-4">
            <div class="flex justify-between items-center gap-x-4">
                <div>
                    <img src="{{asset('img/dc-logo.png')}}" alt="DC Comics Logo">
                </div>

                <nav>
                    <ul class="flex gap-x-10 text-dc-gray-500 font-bold uppercase">
                        @foreach($links as $link)
                            <li class="{{ Route::is($link['url']) ? 'text-dc-blue' : '' }} hover:text-dc-blue focus-within:text-dc-blue">
                                <a href="{{ !empty($link['url']) ? route($link['url']) : '' }}">
                                    {{ $link['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <form class="flex items-center gap-x-1 border-b-2 border-b-dc-blue">
                    <input
                        class="
                            border-none p-1
                            focus-visible:outline-none
                            placeholder:text-right placeholder:text-dc-gray-500 placeholder:font-medium
                        "
                        type="text"
                        placeholder="Search"
                    />
                    <div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  Header Hero  --}}
    <div class="h-[410px]">
        <img class="object-cover object-top w-full h-full" src="{{ asset('img/jumbotron.jpg') }}" alt="">
    </div>
</header>
