<div>
    <section class="relative min-h-screen bg-navy pt-24 pb-16 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/background.png') }}" alt="" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-linear-to-r from-navy/90 via-navy/70 to-navy/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white uppercase mb-12">Contact Us</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div>
                    @if (session()->has('success'))
                        <div class="bg-green-500/20 border border-green-400/30 text-green-300 px-4 py-3 rounded-lg text-sm mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submitContact" class="space-y-6">
                        <div>
                            <label for="name" class="block text-white text-sm font-medium mb-2">Full Name</label>
                            <input
                                type="text"
                                id="name"
                                wire:model="name"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition"
                                placeholder="Enter your full name"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-white text-sm font-medium mb-2">Email</label>
                            <input
                                type="email"
                                id="email"
                                wire:model="email"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition"
                                placeholder="Enter your email"
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-white text-sm font-medium mb-2">Message</label>
                            <textarea
                                id="message"
                                wire:model="message"
                                rows="6"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition resize-none"
                                placeholder="Enter your message"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="bg-white/20 hover:bg-white/30 border border-white/30 text-white font-medium px-8 py-2.5 rounded-lg transition-colors text-sm uppercase tracking-wider"
                        >
                            Send
                        </button>
                    </form>
                </div>

                {{-- Map / Image --}}
                <div class="flex items-center justify-center">
                    <div class="w-full h-80 lg:h-full min-h-[320px] rounded-xl overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.5458481718549!2d106.49322263720077!3d-6.239543716279113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4206fdc354d4fb%3A0x5c06de6daaf7d938!2sMeerkats%20Flexipack%20Indonesia%20(MFI).%20PT!5e0!3m2!1sid!2sid!4v1772616836459!5m2!1sid!2sid"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-xl"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
