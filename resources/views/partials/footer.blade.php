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

<footer>
    {{--  Footer Top  --}}
    <div class="bg-footer-img">
        <div class="relative w-3/4 mx-auto py-6 space-y-2 overflow-hidden">
            <div class="z-10">
                <div class="flex gap-x-10">
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <h4 class="text-xl text-white font-bold uppercase">DC Comics</h4>
                            <ul class="text-dc-gray-300 text-sm">
                                @foreach($links as $link)
                                    <li>
                                        <a href="{{ !empty($link['url']) ? route($link['url']) : '' }}">
                                            {{ $link['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="space-y-2">
                            <h4 class="text-xl text-white font-bold uppercase">Shop</h4>
                            <ul class="text-dc-gray-300 text-sm">
                                @foreach($links as $link)
                                    @if($loop->index == 2)
                                        @break
                                    @endif

                                    <li>
                                        <a href="{{ !empty($link['url']) ? route($link['url']) : '' }}">
                                            {{ $link['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="space-y-2">
                            <h4 class="text-xl text-white font-bold uppercase">DC</h4>
                            <ul class="text-dc-gray-300 text-sm">
                                @foreach($links as $link)
                                    <li>
                                        <a href="{{ !empty($link['url']) ? route($link['url']) : '' }}">
                                            {{ $link['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="space-y-2">
                            <h4 class="text-xl text-white font-bold uppercase">Sites</h4>
                            <ul class="text-dc-gray-300 text-sm">
                                @foreach($links as $link)
                                    @if($loop->index == 5)
                                        @break
                                    @endif

                                    <li>
                                        <a href="{{ !empty($link['url']) ? route($link['url']) : '' }}">
                                            {{ $link['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-xs text-dc-gray-300 mt-2">
                    All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise
                    <a class="text-dc-blue" href="/">noted here</a>.
                    All rights reserved.<br>
                    <a class="text-dc-blue" href="/">Cookies Settings</a>
                </div>
            </div>

            <img class="absolute top-2/4 left-3/4 -translate-x-2/4 -translate-y-2/4" src="{{asset('img/dc-logo-bg.png')}}" alt="">
        </div>

    </div>

    {{--  Footer Bottom  --}}
    <div class="bg-dc-gray-500">
        <div class="w-3/4 mx-auto py-8 flex justify-between items-center">
            <button class="px-4 py-2 border-2 border-dc-blue text-lg font-medium text-white uppercase">Sign-up Now!</button>
            <div class="flex items-center gap-x-8">
                <p class="text-xl font-bold text-dc-blue uppercase">Follow Us</p>
                <div class="flex gap-x-4">
                    <a href="/">
                        <img src="{{asset('img/footer-facebook.png')}}" alt="">
                    </a>
                    <a href="/">
                        <img src="{{asset('img/footer-twitter.png')}}" alt="">
                    </a>
                    <a href="/">
                        <img src="{{asset('img/footer-youtube.png')}}" alt="">
                    </a>
                    <a href="/">
                        <img src="{{asset('img/footer-pinterest.png')}}" alt="">
                    </a>
                    <a href="/">
                        <img src="{{asset('img/footer-periscope.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
