
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ $metaTitle ?: 'Balkanpedia' }}</title>
    <meta name="author" content="Balkanpedia">
    <meta property="og:description" content="{{ $metaDescription }}"> --}}
    {{-- <meta name="description" content="{{ $metaDescription }}"> --}}
    <meta name="description" content="Balkanpedia, stranica u kojoj se objavljuju naučno-istraživački članci">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta property="og:image" content="{{ $metaImage }}"> --}}

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
        var host = window.location.hostname;
    if(host != "127.0.0.1") {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-SHCHX9Y66V');
    }
    </script>
</head>
<body class="bg-gray-50 font-family-karla">
    <div class="container mx-auto flex flex-wrap py-6 justify-center">
        {{ $slot }}
    </div>
</body>
</html>
