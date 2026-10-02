<x-layout title="Projects – Nishan Rai">

    <section class="py-16 bg-surface/10">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="font-space text-3xl font-bold text-textPrimary mb-12 text-center">Projects
                <span class="block font-label-badge text-primary mt-2">Showcase of real-world work</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- 1. HamroKoseli – Internship project --}}
                <div class="bg-surface rounded-xl border border-hairline hover:border-accentMint transition-colors overflow-hidden">
                    <div class="p-6">
                        <h3 class="font-space text-2xl font-semibold text-textPrimary mb-3">#01 HamroKoseli</h3>
                        <p class="text-textMuted mb-4">A Laravel-based e‑commerce system built as an internship/team project. I focused on the "Today's Deals" feature, wiring the frontend timing loop to the admin backend and implementing the corresponding API endpoints.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Laravel</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Vue / Alpine</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">MySQL</span>
                        </div>
                        <p class="text-sm text-textMuted font-mono mb-4">Role: Front‑end integration & backend refinement (Today’s Deals)</p>
                        {{-- <a href="{{ route('project.show', ['project' => 'hamro-koseli']) }}" class="inline-block bg-accentMint text-surface py-2 px-4 rounded-md hover:bg-accentViolet transition-colors text-sm font-mono">View Details</a> --}}
                    </div>
                </div>

                {{-- 2. E‑Course Platform – Java project --}}
                <div class="bg-surface rounded-xl border border-hairline hover:border-accentMint transition-colors overflow-hidden">
                    <div class="p-6">
                        <h3 class="font-space text-2xl font-semibold text-textPrimary mb-3">#02 E‑Course Platform</h3>
                        <p class="text-textMuted mb-4">A Java‑based e‑learning platform that provides course management, enrollment and content delivery.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Java</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Maven</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Spring</span>
                        </div>
                        <p class="text-sm text-textMuted font-mono mb-4">Role: Feature implementation & integration</p>
                        {{-- <a href="{{ route('project.show', ['project' => 'e-course-platform']) }}" class="inline-block bg-accentMint text-surface py-2 px-4 rounded-md hover:bg-accentViolet transition-colors text-sm font-mono">View Details</a> --}}
                    </div>
                </div>

                {{-- 3. Smart Helmet – ESP32 IoT project --}}
                <div class="bg-surface rounded-xl border border-hairline hover:border-accentMint transition-colors overflow-hidden">
                    <div class="p-6">
                        <h3 class="font-space text-2xl font-semibold text-textPrimary mb-3">#03 Smart Helmet</h3>
                        <p class="text-textMuted mb-4">An ESP32‑based smart helmet that collects sensor data and publishes it via MQTT to a web console for real‑time monitoring.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">ESP32</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">MQTT</span>
                            <span class="px-2 py-1 rounded bg-primary-400 text-sm font-mono text-textPrimary">Arduino IDE</span>
                        </div>
                        <p class="text-sm text-textMuted font-mono mb-4">Role: Firmware & MQTT integration</p>
                        {{-- <a href="{{ route('project.show', ['project' => 'smart-helmet']) }}" class="inline-block bg-accentMint text-surface py-2 px-4 rounded-md hover:bg-accentViolet transition-colors text-sm font-mono">View Details</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
