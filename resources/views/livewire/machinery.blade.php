<div>
    <section class="relative min-h-screen bg-navy pt-24 pb-16 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/background.png') }}" alt="" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-linear-to-r from-navy/90 via-navy/70 to-navy/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-12">Production Facilities</h1>

            @php
                $machines = [
                    [
                        'name' => 'PP Extrude Machine',
                        'image' => '1',
                        'description' => 'This machine processes polypropylene (PP) raw materials into high-quality plastic film used in flexible packaging applications.',
                    ],
                    [
                        'name' => 'Printing Machine',
                        'image' => '2',
                        'description' => 'Our printing machine delivers high-quality printing on plastic film materials, ensuring clear, consistent, and precise packaging designs that meet industry standards.',
                    ],
                    [
                        'name' => 'Drylami Machine',
                        'image' => '3',
                        'description' => 'The dry lamination machine combines multiple film layers into a single, durable structure, enhancing packaging strength, protection, and overall product quality.',
                    ],
                    [
                        'name' => 'Slitting & Rewinder Machine',
                        'image' => '4',
                        'description' => 'This machine converts large film rolls into smaller rolls with precise dimensions, ensuring efficiency and readiness for further production or customer requirements.',
                    ],
                    [
                        'name' => 'PE Extrude Machine',
                        'image' => '5',
                        'description' => 'The PE extrusion machine produces polyethylene (PE) film, commonly used as a protective inner layer to ensure packaging durability and product safety.',
                    ],
                ];
            @endphp

            <div class="space-y-6">
                @foreach ($machines as $index => $machine)
                    <div class="flex flex-col md:flex-row items-stretch bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden hover:bg-white/10 transition-colors">
                        <div class="md:w-2/5 shrink-0">
                            <img
                                src="{{ asset('images/machine/' . $machine['image'] . '.png') }}"
                                alt="{{ $machine['name'] }}"
                                class="w-full h-56 md:h-full object-cover"
                            >
                        </div>
                        <div class="p-6 md:p-8 flex flex-col justify-center">
                            <h2 class="text-xl md:text-2xl font-bold text-white mb-3">{{ $machine['name'] }}</h2>
                            <p class="text-white/70 text-sm md:text-base leading-relaxed">{{ $machine['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
