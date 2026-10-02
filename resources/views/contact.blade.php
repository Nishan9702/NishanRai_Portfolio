<x-layout title="Contact – Nishan Rai">
    <section class="bg-[#0B0D12] py-20">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-semibold text-[#F5F7FA] mb-2">
                    Let’s Build Something
                </h1>
                <p class="text-[#8A93A6] mx-auto max-w-2xl">
                    Have an idea, a project, or just want to connect? Feel
                    free to reach out. I'm always interested in discussing software,
                    development, and new ideas.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-[#12161F] rounded-2xl p-8 space-y-6">
                    <h2 class="text-2xl font-semibold text-[#F5F7FA] mb-4">
                        Get in Touch
                    </h2>

                    <div class="space-y-4">
                        <div>
                            <p class="text-[#8A93A6] font-mono text-sm mb-1">EMAIL</p>
                            <a href="mailto:nishansampang9@gmail.com"
                                class="text-[#00E5C7] hover:underline">nishansampang9@gmail.com</a>
                        </div>

                        <div>
                            <p class="text-[#8A93A6] font-mono text-sm mb-1">PHONE</p>
                            <a href="tel:+9779764464234" class="text-[#00E5C7] hover:underline">+977
                                976 446 4234</a>
                        </div>

                        <div>
                            <p class="text-[#8A93A6] font-mono text-sm mb-1">LOCATION</p>
                            <p class="text-[#00E5C7]">Dharan, Nepal</p>
                        </div>

                        <div>
                            <p class="text-[#8A93A6] font-mono text-sm mb-1">GITHUB</p>
                            <a href="https://github.com/Nishan9702" target="_blank" rel="noopener noreferrer"
                                class="text-[#00E5C7] hover:underline">Nishan9702</a>
                        </div>

                        <div>
                            <p class="text-[#8A93A6] font-mono text-sm mb-1">LINKEDIN</p>
                            <a href="https://linkedin.com/in/nishan-rai" target="_blank" rel="noopener noreferrer"
                                class="text-[#00E5C7]hover:underline">Nishan Rai</a>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="https://github.com/Nishan9702" target="_blank" rel="noopener noreferrer"
                            class="text-white hover:text-[#00E5C7] text-2xl transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12c0 7.61-5.37 10-10 3M12 12L2 12c4.33 5.65 10 5.73 12 0 2-5.73 7.67-5.65 12 0" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/in/nishan-rai" target="_blank" rel="noopener noreferrer"
                            class="text-white hover:text-[#00E5C7] text-2xl transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 010 8h-1v8h-2v-8H9m7-2h-1V5a1 1 0 111 1z" />
                            </svg>
                        </a>
                        <a href="mailto:nishansampang9@gmail.com"
                            class="text-white hover:text-[#7C6BFF] text-2xl transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l4.5 8.5L10 10.5 13 18 21
  6h-18z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-[#12161F] rounded-2xl p-8">
                    <h2 class="text-2xl font-semibold text-[#F5F7FA] mb-4">
                        Message Me
                    </h2>

                    <form method="POST" action="#" class="space-y-6">
                        <div>
                            <label for="name" class="block text-[#F5F7FA] font-medium mb-1">Name</label>
                            <input id="name" name="name" type="text" placeholder="Your name"
                                class="w-full bg-[#0B0D12] border border-[#303030] rounded-md p-3 text-[#F5F7FA] placeholder:text-[#8A93A6]
                                        focus:outline-none focus:ring-2 focus:ring-[#00E5C7]
                                        focus:border-transparent transition-colors" />
                        </div>

                        <div>
                            <label for="email" class="block text-[#F5F7FA] font-medium mb-1">Email</label>
                            <input id="email" name="email" type="email" placeholder="you@example.com"
                                class="w-full bg-[#0B0D12] border
                                 border-[#303030] rounded-md p-3 text-[#F5F7FA] placeholder:text-[#8A93A6]
                                    focus:outline-none focus:ring-2 focus:ring-[#00E5C7]
                                    focus:border-transparent transition-colors" />
                        </div>

                        <div>
                            <label for="subject" class="block text-[#F5F7FA] font-medium mb-1">
                                Subject
                            </label>
                            <input id="subject" name="subject" type="text" placeholder="Subject"
                                class="w-full bg-[#0B0D12] border border-[#303030] rounded-md p-3 text-[#F5F7FA] placeholder:text-[#8A93A6]
                                        focus:outline-none focus:ring-2 focus:ring-[#00E5C7]
                                        focus:border-transparent transition-colors" />
                        </div>

                        <div>
                            <label for="message" class="block text-[#F5F7FA] font-medium mb-1">
                                Message
                            </label>
                            <textarea id="message" name="message" rows="5" placeholder="Your message..."
                                class="w-full bg-[#0B0D12] border
                                        border-[#303030] rounded-md p-3 text-[#F5F7FA] placeholder:text-[#8A93A6]
                                          resize-none focus:outline-none focus:ring-2 focus:ring-[#00E5C7]
                                          focus:border-transparent transition-colors"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#00E5C7] text-[#0B0D12]
                             font-semibold py-3 rounded-md hover:bg-[#00d5b9] transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <div class="text-center mt-12 text-[#8A93A6]">
                <p class="text-[#F5F7FA] mb-2">
                    Currently building, learning, and improving.
                </p>
                <p>
                    I'm always open to interesting projects, ideas, and
                    conversations.
                </p>
            </div>
        </div>
    </section>
</x-layout>
