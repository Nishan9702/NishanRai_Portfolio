<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <!-- Background Pattern Image -->
        <img src="{{ asset('images/about-design.png') }}" alt="About page design" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background to-transparent mix-blend-multiply"></div>
    </div>
    <div class="relative z-10 text-center px-4">
        <h1 class="font-space text-4xl font-bold text-textPrimary mb-6">{{ $title ?? 'About Me' }}</h1>
        <p class="text-lg text-textMuted max-w-2xl mx-auto">Hi, I’m <strong>Nishan Rai</strong>, an IT student and full‑stack developer focused on web development and practical software projects.</p>
    </div>
</section>