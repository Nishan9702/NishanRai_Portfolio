{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishan Rai – Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        <div class="flex items-center space-x-2">
            <h1 class="font-space font-bold text-xl">Nishan<span class="text-accentMint">&#8226;</span>Rai</h1>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="hover:text-accentMint transition-colors">Home</a>
            <a href="{{ route('about') }}" class="hover:text-accentMint">About</a>
            <a href="{{ route('projects') }}" class="hover:text-accentMint">Projects</a>
            <a href="{{ route('contact') }}" class="hover:text-accentMint">Contact</a>
            <a href="{{ asset('resume.pdf') }}"
               class="inline-block bg-accentMint text-surface px-4 py-2 rounded-lg hover:bg-accentViolet transition-colors">Download CV</a>
        </div>
        <button class="md:hidden hover:text-accentMint">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>
</header>

{{-- Hero section --}}
<section id="home" class="pt-28 md:pt-32 bg-surface w-full" style="--hero-height:100vh;">
    <div class="max-w-6xl mx-auto px-4 py-12 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="flex flex-col justify-center space-y-6">
            <p class="font-mono text-sm uppercase tracking-wide text-accentMint">FULL STACK DEVELOPER · DHARAN, NEPAL</p>
            <h1 class="font-space font-extrabold text-4xl md:text-6xl leading-tight">
                I build fast, clean web products —
                <span class="bg-gradient-to-r from-accentMint to-accentViolet text-transparent bg-clip-text">from frontend to firmware</span>.
            </h1>
            <p class="text-lg md:text-xl text-textMuted">Full Stack Developer and IT student at Itahari International College. I've built an e‑learning platform, an IoT safety device, and a multi‑vendor e‑commerce marketplace.</p>
            <div class="flex space-x-4 mt-4">
                <a href="mailto:nishansampang9@gmail.com" class="inline-block bg-accentMint text-surface px-6 py-3 rounded-md hover:bg-accentViolet transition-colors">Email me</a>
                <a href="{{ asset('resume.pdf') }}" class="inline-block border border-accentMint px-6 py-3 rounded-md text-textPrimary hover:text-accentMint">Download CV</a>
            </div>
            <div class="flex flex-wrap space-x-4 mt-6">
                <span class="inline-flex items-center font-mono text-sm uppercase px-3 py-1 rounded-md bg-surface border border-hairline text-textPrimary">3+ Projects Shipped</span>
                <span class="inline-flex items-center font-mono text-sm uppercase px-3 py-1 rounded-md bg-surface border border-hairline text-textPrimary">3‑Month Internship @ CodeIT</span>
                <span class="inline-flex items-center font-mono text-sm uppercase px-3 py-1 rounded-md bg-surface border border-hairline text-textPrimary">BSc IT — In Progress</span>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-accentMint to-accentViolet opacity-20 rounded-lg filter blur-xl"></div>
                <img src="{{ asset('UI/portrait-placeholder.png') }}" alt="Portrait of Nishan" class="relative rounded-xl shadow-lg w-72 h-72 object-cover">
                <div class="absolute top-4 left-4 transform -rotate-3 bg-surface/80 backdrop-blur-sm px-3 py-1 rounded-md text-sm font-mono text-accentMint shadow-sm">CodeIT · Intern</div>
                <div class="absolute bottom-4 right-4 transform rotate-3 bg-surface/80 backdrop-blur-sm px-3 py-1 rounded-md text-sm font-mono text-accentMint shadow-sm">ESP32 · IoT</div>
            </div>
        </div>
    </div>
</section>

{{-- Tech strip --}}
<section class="bg-surface/80 py-3 relative overflow-hidden">
    <div class="flex space-x-3">
        @foreach(['Java','JavaScript','Python','Tailwind CSS','HTML','CSS','ESP32','Git','REST APIs','HTTP'] as $tech)
            <span class="inline-block px-3 py-1 rounded-md font-mono text-sm text-textPrimary border border-hairline">{{ $tech }}</span>
        @endforeach
    </div>
</section>

{{-- Featured Work --}}
<section id="featured" class="pt-16 pb-24 bg-surface">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center justify-between mb-10">
            <h2 class="font-space text-2xl font-bold">Selected Work</h2>
            <a href="{{ route('projects') }}" class="font-mono text-sm uppercase text-accentMint hover:underline">View all &rarr;</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['title'=>'Skill Local','desc'=>'Multi‑vendor e‑commerce marketplace for local artisans.','tech'=>['Tailwind','JavaScript','REST API'],'link'=>['live'=>'https://skill.local','github'=>'https://github.com/Nishan9702/skill-local']],
                ['title'=>'Smart Helmet','desc'=>'Real‑time sensor alerts on an ESP32 helmet via HTTP.','tech'=>['ESP32','Python','JavaScript'],'link'=>['live'=>null,'github'=>'https://github.com/Nishan9702/smart-helmet']],
                ['title'=>'E‑Course Platform','desc'=>'Auth‑based online learning site with course mgmt.','tech'=>['Java','JavaScript','Tailwind'],'link'=>['live'=>null,'github'=>'https://github.com/Nishan9702/e-course']]
            ] as $proj)
                <div class="bg-background border border-hairline rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                    <span class="font-mono text-sm text-accentMint block mb-2">#{{ str_pad($loop->index+1,2,'0',STR_PAD_LEFT) }}</span>
                    <h3 class="font-space text-xl font-semibold mb-3">{{ $proj['title'] }}</h3>
                    <p class="text-textMuted mb-4">{{ $proj['desc'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($proj['tech'] as $t)
                            <span class="bg-surface/50 px-3 py-1 rounded-md text-xs font-mono text-textPrimary border border-hairline">{{ $t }}</span>
                        @endforeach
                    </div>
                    <div class="flex space-x-3">
                        @if($proj['link']['live'])
                            <a href="{{ $proj['link']['live'] }}" class="inline-block font-mono text-sm bg-accentMint text-surface py-1 px-3 rounded-md hover:bg-accentViolet transition-colors">Live</a>
                        @endif
                        <a href="{{ $proj['link']['github'] }}" class="inline-block font-mono text-sm border border-hairline text-textPrimary py-1 px-3 rounded-md hover:text-accentMint transition-colors">GitHub</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA band --}}
<section class="bg-surface py-12 text-center">
    <h3 class="text-2xl font-space font-bold mb-4">Have a project in mind?</h3>
    <a href="{{ route('contact') }}"
       class="font-mono text-sm bg-accentMint text-surface py-3 px-6 rounded-md hover:bg-accentViolet transition-colors">Get in touch</a>
</section>

{{-- Footer --}}
<footer class="bg-surface py-6 text-sm text-textMuted">
    <div class="max-w-6xl mx-auto px-4 flex flex-col items-center">
        <p class="mb-2">© 2026 Nishan Rai. All rights reserved.</p>
        <div class="flex space-x-6">
            <a href="mailto:nishansampang9@gmail.com" class="hover:text-accentMint">Email</a>
            <a href="tel:+9779764464234" class="hover:text-accentMint">+977 976 446 4234</a>
            <a href="https://github.com/Nishan9702" class="hover:text-accentMint">GitHub</a>
            <a href="https://linkedin.com/in/nishan-rai" class="hover:text-accentMint">LinkedIn</a>
        </div>
    </div>
</footer>

</body>
</html>
