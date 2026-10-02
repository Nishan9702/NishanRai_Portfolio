<x-layout>
    <section class="pt-28 pb-10 lg:py-32 lg:px-10">
        <h1 class="font-semibold text-4xl">Smart Helmet</h1>
        <p class="mt-4">An ESP32‑based smart helmet that collects sensor data and publishes it via MQTT to a web console for real‑time monitoring.</p>
        <h3 class="mt-6 text-xl font-bold">Project type / Category</h3>
        <p>IoT Firmware – Smart Helmet</p>
        <h3 class="mt-6 text-xl font-bold">Technologies used</h3>
        <p>ESP32, Arduino IDE, MQTT</p>
        <h3 class="mt-6 text-xl font-bold">Project objective</h3>
        <p>Build a wearable helmet that streams sensor data to a dashboard for real‑time safety monitoring.</p>
        <h3 class="mt-6 text-xl font-bold">Main features</h3>
        <ul class="list-disc pl-5 mt-2">
            <li>Sensors: accelerometer, gyroscope, temperature, etc.</li>
            <li>MQTT broker publishing to IoT console</li>
            <li>Basic firmware for ESP32 with OTA updates</li>
        </ul>
        <h3 class="mt-6 text-xl font-bold">My contribution</h3>
        <p>Implemented firmware for sensor reading, MQTT communication logic, and dashboard integration. Designed firmware architecture and wrote tests for sensor data handling.</p>
        <h3 class="mt-6 text-xl font-bold">Development / implementation details</h3>
        <p>Used Arduino IDE for C++ sketch, PubSubClient for MQTT, and FreeRTOS tasks for concurrent sensor polling. Handled deep sleep and wake cycles for power efficiency.</p>
        <h3 class="mt-6 text-xl font-bold">Challenges / learning</h3>
        <p>Managing power consumption on ESP32, handling flaky network connections, and parsing sensor data for meaningful metrics.</p>
        <div class="mt-10">
            <a href="/projects" class="text-indigo-500 hover:underline">← Back to Projects</a>
        </div>
    </section>
</x-layout>