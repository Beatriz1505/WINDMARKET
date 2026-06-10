<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.pngplay.com/wp-content/uploads/2/Christian-Cross-Transparent-PNG.png" type="image/x-icon">
    <title>@yield('title', 'WindMarket — Energia Eólica')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        void:    '#0a0a0a',
                        pit:     '#0f0f0f',
                        abyss:   '#1a0000',
                        blood:   '#cc0000',
                        crimson: '#ff4444',
                        smoke:   '#e8e8e8',
                        ash:     '#888888',
                        coal:    '#444444',
                        ember:   '#1c1c1c',
                    },
                    fontFamily: {
                        display: ['Cinzel', 'serif'],
                        body:    ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', system-ui, sans-serif; font-weight: 300; }
    </style>
</head>
<body class="bg-void text-smoke min-h-screen flex flex-col">

    <div class="h-[3px] bg-gradient-to-r from-abyss via-blood to-abyss"></div>

    <nav class="bg-pit border-b border-abyss px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-display text-xl font-black text-blood tracking-wide hover:text-crimson transition-colors">
            Wind<span class="text-smoke">Market</span>
        </a>
        <ul class="flex gap-8 list-none m-0 p-0">
            <li>
                <a href="{{ route('home') }}"
                   class="text-xs uppercase tracking-widest font-semibold transition-colors
                          {{ request()->routeIs('home') ? 'text-blood' : 'text-ash hover:text-blood' }}">
                    Turbinas
                </a>
            </li>
            <li>
                <a href="{{ route('contato') }}"
                   class="text-xs uppercase tracking-widest font-semibold transition-colors
                          {{ request()->routeIs('contato') ? 'text-blood' : 'text-ash hover:text-blood' }}">
                    Contato
                </a>
            </li>
        </ul>
    </nav>

    <main class="flex-1 w-full max-w-6xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    <footer class="text-center py-6 text-coal text-xs tracking-wider border-t border-abyss">
        &copy; {{ date('Y') }} WindMarket &mdash;
        <span class="text-blood">Energia que move o mundo.</span>
    </footer>

</body>
</html>
