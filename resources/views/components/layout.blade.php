<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>
        {{ $title ?? 'Nishan Rai – Portfolio' }}
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#0B0D12',
                        surface: '#12161F',
                        textPrimary: '#F5F7FA',
                        textMuted: '#8A93A6',
                        borderHairline: 'rgba(255,255,255,0.08)',
                        accentMint: '#00E5C7',
                        accentViolet: '#7C6BFF',
                    },

                    fontFamily: {
                        space: ['Space Grotesk', 'sans-serif'],
                        inter: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },

                    borderRadius: {
                        md: '12px',
                        lg: '16px',
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-background text-textPrimary font-inter min-h-screen">

    {{-- Navigation --}}
    <header class="fixed inset-x-0 top-0 z-50 backdrop-blur-lg bg-surface/70">
        <nav class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">

            {{-- Logo --}}
            <div class="flex items-center space-x-2">
                <a href="{{ route('home') }}" class="flex items-center font-space font-bold text-xl">
                    <img src="{{ asset('images/logo.png') }}" alt="Nishan Rai logo" class="h-10 w-10 object-contain">
                    <span class="ml-2">Nishan<span class="text-accentMint">&#8226;</span>Rai</span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-6">

                <a href="{{ route('home') }}" class="hover:text-accentMint transition-colors">
                    Home
                </a>

                {{-- We will add these when their pages are created --}}
                <a href="{{ route('projects') }}" class="hover:text-accentMint transition-colors">
                    Projects
                </a>

                <a href="{{ route('contact') }}" class="hover:text-accentMint transition-colors">
                    Contact
                </a>
                <a href="{{ route('about') }}" class="hover:text-accentMint transition-colors">
                    About
                </a>

                <a href="{{ asset('resume.pdf') }}" download
                    class="inline-block bg-accentMint text-surface px-4 py-2 rounded-lg hover:bg-accentViolet transition-colors">
                    Download CV
                </a>

            </div>

            {{-- Mobile menu button --}}
            <button type="button" class="md:hidden hover:text-accentMint" aria-label="Open navigation menu">

                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </button>

        </nav>
    </header>


    {{-- Page content --}}
    <main>
        {{ $slot }}
    </main>


    {{-- Footer --}}
    <footer class="bg-surface py-6 text-sm text-textMuted">

        <div class="max-w-6xl mx-auto px-4 flex flex-col items-center">

            <p class="mb-2">
                © {{ date('Y') }} Nishan Rai. All rights reserved.
            </p>

            <div class="flex flex-wrap justify-center gap-6">

                <a href="mailto:nishansampang9@gmail.com" class="hover:text-accentMint transition-colors">
                    Email
                </a>

                <a href="tel:+9779764464234" class="hover:text-accentMint transition-colors">
                    +977 976 446 4234
                </a>

                <a href="https://github.com/Nishan9702" target="_blank" rel="noopener noreferrer"
                    class="hover:text-accentMint transition-colors">
                    GitHub
                </a>

                <a href="https://linkedin.com/in/nishan-rai" target="_blank" rel="noopener noreferrer"
                    class="hover:text-accentMint transition-colors">
                    LinkedIn
                </a>

            </div>

        </div>

    </footer>

</body>

</html>
