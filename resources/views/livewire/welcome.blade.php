<div>
    {{-- Hero Section --}}
    <section id="home" class="relative min-h-screen flex items-center bg-navy overflow-hidden">
        {{-- Background image with overlay --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/background.png') }}" alt="" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-linear-to-r from-navy/90 via-navy/70 to-navy/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-24 pb-12">
            <div class="max-w-2xl">
                <h1 class="text-5xl md:text-6xl lg:text-8xl font-bold italic1 text-white leading-tight mb-6">
                    Welcome To<br>Meerkats
                </h1>
                <p class="text-white/90 text-xl font-medium mb-1">World Class Manufacturing</p>
                <p class="text-white/70 text-lg">Flexible Packaging Solutions for Your Business</p>
            </div>

            {{-- Customer Carousel --}}
            <div class="mt-16 container mx-auto">
                <h3 class="text-white text-lg font-semibold mb-6">Our Customers</h3>

                <div id="customer-carousel" class="splide" aria-label="Our Customers">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @for ($i = 1; $i <= 16; $i++)
                                <li class="splide__slide px-2">
                                    <div class="bg-white rounded-lg p-3 flex items-center justify-center h-30 shadow-md">
                                        <img
                                            src="{{ asset('images/customers/customer' . $i . '.png') }}"
                                            alt="Customer {{ $i }}"
                                            class="max-h-14 max-w-full object-contain"
                                        >
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#customer-carousel', {
            type: 'loop',
            perPage: 5,
            perMove: 1,
            gap: '0.5rem',
            autoplay: true,
            interval: 2500,
            pauseOnHover: true,
            pagination: false,
            arrows: true,
            breakpoints: {
                1024: { perPage: 4 },
                768: { perPage: 3 },
                640: { perPage: 2 },
            },
        }).mount();
    });
</script>
@endpush
