@extends('layouts.app')

@section('title', $service->title . ' - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="{{ $service->image ?? 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1600&q=80' }}" alt="{{ $service->title }}" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">{{ $service->title }}</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">{{ \Illuminate\Support\Str::limit($service->description, 150) }}</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ $service->image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80' }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $service->title }}</h2>
                <p class="text-gray-600 leading-relaxed mb-8">{{ $service->description }}</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Konsultasi desain khusus</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Material premium & pengerjaan ahli</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Manajemen proyek penuh</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Jaminan tepat waktu</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Minta Penawaran
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Tertarik dengan Layanan Ini?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Hubungi kami untuk mendiskusikan bagaimana kami dapat menerapkan layanan ini pada proyek Anda.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
            Mulai Proyek Anda
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>
@endsection
