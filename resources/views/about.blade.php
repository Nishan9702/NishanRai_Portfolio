<x-layout title="About – Nishan Rai">

    {{-- Hero – background image with overlay --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden bg-surface">
        <div class="absolute inset-0">
            <img src="{{ asset('images/about-design.png') }}" alt="About page background" class="w-full h-full object-cover opacity-75" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background to-transparent mix-blend-multiply"></div>
        </div>

        <div class="relative z-10 text-center px-4">
            <h1 class="font-space text-4xl font-bold text-textPrimary mb-6">About Me</h1>
            <p class="text-lg text-textMuted max-w-2xl mx-auto">
                Hi, I’m <strong>Nishan Rai</strong>, an IT student and full‑stack developer focused on web development and practical software projects.
            </p>
        </div>
    </section>

    {{-- Core sections – all use a two‑column responsive layout --}}
    <section class="py-16 bg-surface/10">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- 1. Education --}}
            <div>
                <h3 class="font-space text-2xl font-semibold mb-4">Education</h3>
                <p class="text-lg mb-4"><strong>BSc IT – Itahari International College</strong> (currently in progress)</p>
            </div>

            {{-- 2. Development Interests & Skills --}}
            <div>
                <h3 class="font-space text-2xl font-semibold mb-4">Development Interests & Skills</h3>
                <ul class="list-disc list-inside space-y-1 text-textMuted">
                    <li>Full‑stack web development</li>
                    <li>Laravel / PHP</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>JavaScript</li>
                    <li>Database development (SQL, Eloquent)</li>
                    <li>IoT / ESP32</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- 3. Technical Skills --}}
    <section class="py-16 bg-surface/10">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">

            <div>
                <h3 class="font-space text-2xl font-semibold mb-4">Technical Skills</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-surface rounded-lg p-4 shadow-xl">
                        <h4 class="font-mono text-sm font-semibold text-accentMint mb-2">Backend & Systems</h4>
                        <ul class="list-disc list-inside space-y-1 text-textMuted">
                            <li>RESTful API design</li>
                            <li>Database modeling & migrations</li>
                            <li>Auth & RBAC</li>
                            <li>Unit & feature testing</li>
                        </ul>
                    </div>

                    <div class="bg-surface rounded-lg p-4 shadow-xl">
                        <h4 class="font-mono text-sm font-semibold text-primary fixed mb-2">Frontend & UX</h4>
                        <ul class="list-disc list-inside space-y-1 text-textMuted">
                            <li>Vue / Alpine (aside) or React (if used)</li>
                            <li>Tailwind CSS</li>
                            <li>TypeScript (basic usage)</li>
                            <li>Accessibility & performance best practices</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="font-space text-2xl font-semibold mb-4">IoT & Embedded</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-surface rounded-lg p-4 shadow-xl">
                        <h4 class="font-mono text-sm font-semibold text-primary fixed mb-2">ESP32</h4>
                        <ul class="list-disc list-inside space-y-1 text-textMuted">
                            <li>MicroPython</li>
                            <li>HTTP telemetry & serial communication</li>
                            <li>Sensor data processing</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- 4. Experience / Internship --}}
    <section class="py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h3 class="font-space text-2xl font-semibold mb-6">Experience / Internship</h3>

            <div class="bg-background border border-hairline rounded-lg p-6 mb-4">
                <h4 class="font-mono text-sm font-semibold text-accentMint mb-2">CodeIT Internship</h4>
                <p class="text-textMuted">Contributed to backend API development and database optimization for internal CodeIT applications.</p>
            </div>
        </div>
    </section>

    {{-- 5. Closing CTA --}}
    <section class="bg-surface py-12 text-center">
        <h3 class="font-space text-2xl font-bold mb-4">Let’s build something together</h3>
        <a href="{{ route('projects') }}" class="font-mono text-sm bg-accentMint text-surface py-3 px-6 rounded-md hover:bg-accentViolet transition-colors">View Projects</a>
    </section>

</x-layout>
