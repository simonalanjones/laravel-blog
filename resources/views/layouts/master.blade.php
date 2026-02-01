<!DOCTYPE html>
<html lang="en" class="min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer blog - Simon Jones</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,300..900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col bg-white/80">
<header class="pt-8 pb-8 bg-blue-700 text-white shadow-sm">
    <div class="w-full max-w-5xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between w-full items-start md:items-center gap-4">
            <a class="font-bold text-2xl uppercase text-white" href="/">simon.a.jones</a>

            <nav class="flex items-center gap-8 text-lg">
                <a href="/professional-bio" class="hover:underline">Professional Bio</a>
                <a href="/about-this-site" class="hover:underline">About this site</a>
                <a href="/" class="hover:underline">Blog</a>
            </nav>
        </div>
    </div>
</header>

<section class="flex-1 px-4 py-10 md:py-20 bg-blue-50/40">
    <div class="w-full max-w-5xl mx-auto">
        @yield('content')
    </div>
</section>

<footer class="p-4 pb-8 bg-blue-50/40">
    <div class="w-full max-w-5xl mx-auto">
        <div class="flex gap-4 justify-between items-center">
            <small>Copyright © {{ now()->year }}. Coding, theme, and words by Simon Jones</small>
            <div class="flex items-center gap-4">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
                <a href="#"><i class="bi bi-slack"></i></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
