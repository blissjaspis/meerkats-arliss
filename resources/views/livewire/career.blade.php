<div>
    {{-- Smile, breathe, and go slowly. - Thich Nhat Hanh --}}
    <section class="relative bg-navy pt-24 pb-16 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/background.png') }}" alt="Background Image" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-linear-to-r from-navy/90 via-navy/70 to-navy/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <h1 class="text-2xl md:text-4xl font-bold text-white mb-12 max-w-lg">
                Berkembang Bersama <br>
                Membentuk Masa Depan yang Fleksibel
            </h1>

            <div class="text-white/70 text-base space-y-4 mb-5 max-w-lg">
                <p>Bergabunglah dengan PT Meerkats Flexipack Indonesia dan <br>
                    menjadi bagian dari tim yang inovatif, kolaboratif, dan berdedikasi
                    untuk memberikan solusi kemasan terbaik bagi dunia.
                </p>
            </div>

            <button class="bg-blue-500 hover:bg-blue-600 transition-colors text-white px-4 py-2 rounded-md">
                <a class="flex items-center gap-2" href="javascript:void(0)" onclick="document.getElementById('career-list').scrollIntoView({ behavior: 'smooth' });">
                    Lihat Lowongan
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>                      
                </a>
            </button>
        </div>
    </section>

    <section class="bg-navy pt-24 pb-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-12 text-center">
                Mengapa bergabung dengan kami?
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 max-w-7xl mx-auto px-6">
            <div class="text-center border border-white rounded-lg p-5">
                <h3 class="text-md md:text-lg font-bold text-white mb-6">
                    Lingkungan Positif
                </h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed">
                    Kami membangung budaya kerja yang suportif dan saling menghargai.
                </p>
            </div>
            <div class="text-center border border-white rounded-lg p-5">
                <h3 class="text-md md:text-lg font-bold text-white mb-6">
                    Pengembangan Diri
                </h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed">
                    Tumbuh bersama melalui pelatihan dan kesempatan pengembangan karir.
                </p>
            </div>
            <div class="text-center border border-white rounded-lg p-5">
                <h3 class="text-md md:text-lg font-bold text-white mb-6">
                    Kesetaraan
                </h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed">
                    Kami percaya pada kesetaraan kesempatan bagi semua individu.
                </p>
            </div>
            <div class="text-center border border-white rounded-lg p-5">
                <h3 class="text-md md:text-lg font-bold text-white mb-6">
                    Dampak Nyata
                </h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed">
                    Berkontribusi untuk solusi kemasan yang inovatif dan berkelanjutan.
                </p>
            </div>
        </div>
    </section>

    <section id="career-list" class="bg-navy pt-24 pb-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
           <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <div>
                <h3 class="text-md md:text-lg font-bold text-white mb-6">
                    Temukan peluang karir untuk anda
                </h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed mb-5">
                    Kami selalu mencari talenta terbaik untuk bergabung dan membawa perubahan positif bersama kami.
                </p>

                <input type="text" placeholder="Cari posisi atau kata kunci" class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition">
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-1 gap-12">
                    <div class="rounded-xl p-5 border border-white text-white">
                        <h4 class="text-md md:text-lg font-bold mb-6">
                            Production Operator
                        </h4>
                        <div class="flex items-center gap-12">
                            <div class="text-blue-200 bg-blue-600 px-2 py-1 rounded-full text-sm leading-relaxed">Full Time</div>
                            <div class="text-white/70 text-sm leading-relaxed">Tangerang, Banten</div>
                        </div>
                    </div>
                    <div class="rounded-xl p-5 border border-white text-white">
                        <h4 class="text-md md:text-lg font-bold mb-6">
                            Purchasing Staff
                        </h4>
                        <div class="flex items-center gap-12">
                            <div class="text-blue-200 bg-blue-600 px-2 py-1 rounded-full text-sm md:text-base leading-relaxed">Full Time</div>
                            <div class="text-white/70 text-sm leading-relaxed">Tangerang, Banten</div>
                        </div>
                    </div>
                    <div class="rounded-xl p-5 border border-white text-white">
                        <h4 class="text-md md:text-lg font-bold mb-6">
                            Quality Control Staff
                        </h4>
                        <div class="flex items-center gap-12">
                            <div class="text-blue-200 bg-blue-600 px-2 py-1 rounded-full text-sm md:text-base leading-relaxed">Full Time</div>
                            <div class="text-white/70 text-sm leading-relaxed">Tangerang, Banten</div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </section>
</div>