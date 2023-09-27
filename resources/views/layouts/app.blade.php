
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Balkanpedia' }}</title>
    <meta name="author" content="Balkanpedia">
    <meta name="description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ $metaImage }}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        pre {
            padding: 1rem;
            background-color: #1a202c;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .font-family-optima {
            font-family: 'Optima', sans-serif;
        }
        .optima-lowercase {
            font-family: 'Optima', sans-serif;
            text-transform: lowercase;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9103637559448321"
     crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SHCHX9Y66V"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SHCHX9Y66V');
    </script>
</head>
<body class="bg-gray-50 font-family-karla">
    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-row items-center px-4 py-1 gap-8">
            <div class="flex items-center gap-1">
                <img src="{{ asset('logo.png') }}" style="width: 50px;">
                <a class="text-gray-800 hover:text-gray-700 optima-lowercase text-3xl font-medium" href="{{ route('home') }}">
                    Balkanpedia
                </a>
            </div>
            {{-- <div class="flex-1 flex gap-4">
                <a class="text-gray-800 hover:text-gray-700 font-medium uppercase" href="{{ route('bilten') }}">
                    Bilten
                </a>
                <a class="text-gray-800 hover:text-gray-700 font-medium uppercase" href="{{ route('home') }}">
                    O nama
                </a>
                <a class="text-gray-800 hover:text-gray-700 font-medium uppercase" href="{{ route('publish') }}">
                    Objavi Rad
                </a> --}}
            </div>
            <!-- <p class="text-lg text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header') }}
            </p> -->
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-1 px-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Kategorije <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                @foreach ($categories as $category)
                    <a href="{{route('by-category', $category)}}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">{{ $category->title }}</a>
                @endforeach
                {{-- <a href="{{route('about-us')}}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">About us</a> --}}
            </div>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6 justify-center">
        {{ $slot }}
    </div>
    @include('cookie-consent::index')
    <footer class="w-full border-t bg-white pb-0">
        <div class="flex w-full container mx-auto justify-between items-center p-4 flex-col md:flex-row">
            <div>&copy; All Rights Reserved</div>
            <div class="flex">
                <a href="https://www.linkedin.com/in/senad-kurtovi%C4%87-143742201/" target="_blank" class="text-blue-400">@Senad Kurtovic</a>
            </div>
        </div>
    </footer>
</body>
</html>
