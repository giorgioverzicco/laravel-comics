<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            @yield('page-title')
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            "dc-green-light": '#B7FD97',
                            "dc-green": '#55BA59',
                            "dc-green-dark": '#419145',
                            "dc-cyan": '#00A9D9',
                            "dc-blue": '#0282F9',
                            "dc-blue-dark": '#003F5E',
                            "dc-gray-100": '#F6F6F6',
                            "dc-gray-300": '#797979',
                            "dc-gray-500": '#303030',
                            "dc-gray-700": '#1C1C1C'
                        },
                        backgroundImage: {
                            'footer-img': "url('../img/footer-bg.jpg')",
                        }
                    }
                }
            }
        </script>
    </head>

    <body>
        @include('partials.header')
        <main>
            @yield('page-content')
        </main>
        @include('partials.footer')
    </body>
</html>
