@extends('layouts.app')

@section('title', 'Layanan Kami - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1600&q=80" alt="Our Services" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Keahlian Desain Kami</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Layanan desain interior komprehensif yang disesuaikan dengan visi dan gaya hidup Anda.</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-20">
            @forelse($services as $index => $service)
            <div class="grid lg:grid-cols-2 gap-12 items-center {{ $index % 2 === 1 ? 'lg:direction-rtl' : '' }}">
                <div class="{{ $index % 2 === 1 ? 'lg:order-2' : '' }}">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ $service->image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80' }}" alt="{{ $service->title }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>
                <div class="{{ $index % 2 === 1 ? 'lg:order-1' : '' }}">
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">0{{ $index + 1 }}</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-4">{{ $service->title }}</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">{{ $service->description }}</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Konsultasi desain khusus</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Pemilihan material premium</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">Manajemen proyek penuh</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Minta Penawaran
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80" alt="Residential Design" class="rounded-2xl shadow-xl w-full">
                </div>
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">01</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-4">Residential Design</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">Transform your home into a personal sanctuary. We create living spaces that reflect your style, optimize comfort, and bring your vision to life.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="lg:order-2">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Commercial Interiors" class="rounded-2xl shadow-xl w-full">
                </div>
                <div class="lg:order-1">
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">02</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-4">Commercial Interiors</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">Elevate your business environment. Our commercial design services create inspiring workspaces that boost productivity and impress clients.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80" alt="Custom Furniture" class="rounded-2xl shadow-xl w-full">
                </div>
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">03</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-4">Custom Furniture</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">Unique pieces crafted to your specifications. From statement furniture to bespoke accessories, we design items that complete your space.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Proses Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Cara Kami Bekerja</h2>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-lg font-bold">1</div>
                <h4 class="font-semibold text-gray-900 mb-2">Konsultasi</h4>
                <p class="text-gray-600 text-sm">Kami mendengarkan kebutuhan Anda dan memahami visi Anda.</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-lg font-bold">2</div>
                <h4 class="font-semibold text-gray-900 mb-2">Konsep</h4>
                <p class="text-gray-600 text-sm">Kami mengembangkan konsep desain dan menyajikan proposal.</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-lg font-bold">3</div>
                <h4 class="font-semibold text-gray-900 mb-2">Desain</h4>
                <p class="text-gray-600 text-sm">Kami menyelesaikan desain dan memilih semua material.</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-lg font-bold">4</div>
                <h4 class="font-semibold text-gray-900 mb-2">Penyelesaian</h4>
                <p class="text-gray-600 text-sm">Kami mewujudkan visi Anda dengan presisi.</p>
            </div>
        </div>
    </div>
</section>
@endsection
