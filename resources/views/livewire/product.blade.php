<div>
    <section class="relative min-h-screen bg-navy pt-24 pb-16 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/background.png') }}" alt="" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-linear-to-r from-navy/90 via-navy/70 to-navy/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-12">Our Products</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $categories = [
                        [
                            'name' => 'Dairy Products',
                            'image' => '11',
                            'description' => 'Premium dairy product packaging and solutions to ensure freshness, safety, and superior quality.',
                        ],
                        [
                            'name' => 'Process Foods',
                            'image' => '21',
                            'description' => 'High-quality processed food packaging designed to meet modern industry demands and consumer needs.',
                        ],
                        [
                            'name' => 'Frozen Foods',
                            'image' => '31',
                            'description' => 'Durable and resistant food packaging that maintains optimal freshness, taste, and nutritional integrity.',
                        ],
                        [
                            'name' => 'Beverages',
                            'image' => '41',
                            'description' => 'Reliable packaging solutions for various beverage products, ensuring quality, freshness, and convenience.',
                        ],
                        [
                            'name' => 'Snack & Biscuits',
                            'image' => '51',
                            'description' => 'Packaging solutions for snacks and biscuit products designed to preserve crunchiness and enhance product appeal.',
                        ],
                        [
                            'name' => 'Food Additives',
                            'image' => '61',
                            'description' => 'Secure and hygienic packaging for food additives and ingredients, ensuring purity and shelf-life protection.',
                        ],
                        [
                            'name' => 'Health Supplements',
                            'image' => '71',
                            'description' => 'Protective packaging for vitamins and dietary supplement products, ensuring safety, potency, and product integrity.',
                        ],
                        [
                            'name' => 'Non Food Products',
                            'image' => '81',
                            'description' => 'Versatile packaging solutions for non-food products, ensuring quality, protection, and market appeal.',
                        ],
                    ];
                @endphp

                @foreach ($categories as $category)
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl overflow-hidden hover:bg-white/15 transition-colors">
                        <div class="aspect-square bg-white/5 flex items-center justify-center p-4">
                            <img
                                src="{{ asset('images/products/' . $category['image'] . '.png') }}"
                                alt="{{ $category['name'] }}"
                                class="max-h-full max-w-full object-contain"
                            >
                        </div>
                        <div class="p-4">
                            <h3 class="text-white font-semibold text-sm mb-2">{{ $category['name'] }}</h3>
                            <p class="text-white/60 text-xs leading-relaxed">{{ $category['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
