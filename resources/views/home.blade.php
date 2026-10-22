@extends('layouts.app')

@section('title', 'Luxe Interiors - Mengubah Ruang Menjadi Karya Hidup')

@section('content')
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1600&q=80" alt="Luxury Interior" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-300 text-sm font-medium rounded-full mb-6 border border-blue-500/30">Desain Interior Premium</span>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Mengubah Ruang Menjadi <span class="text-blue-400">Karya Hidup</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Kami merancang desain interior khusus yang memadukan keanggunan dan fungsionalitas, menciptakan ruang yang menginspirasi dan meningkatkan kualitas hidup sehari-hari.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('portfolio') }}" class="px-8 py-3.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition shadow-lg shadow-blue-600/25">
                Lihat Portofolio
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-3.5 bg-white/10 text-white font-medium rounded-lg hover:bg-white/20 transition backdrop-blur-sm border border-white/20">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Selamat Datang di Luxe</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Kemewahan Hidup di Sini</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Di Luxe Interiors, kami percaya setiap ruang memiliki cerita. Tim perancang pemenang penghargaan kami membawa pengalaman puluhan tahun untuk mengubah ruangan biasa menjadi pengalaman luar biasa.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Dari konsep hingga penyelesaian, kami menangani setiap detail dengan presisi dan perhatian, memastikan visi Anda terwujud melampaui harapan.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition group">
                    Pelajari Lebih Lanjut Tentang Kami
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=600&q=80" alt="Interior Design" class="rounded-2xl w-full h-48 object-cover shadow-lg">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="Modern Living" class="rounded-2xl w-full h-64 object-cover shadow-lg">
                    </div>
                    <div class="space-y-4 mt-8">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80" alt="Elegant Room" class="rounded-2xl w-full h-64 object-cover shadow-lg">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=600&q=80" alt="Luxury Kitchen" class="rounded-2xl w-full h-48 object-cover shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">250+</h3>
                <p class="text-gray-600 mt-1">Proyek Selesai</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">50+</h3>
                <p class="text-gray-600 mt-1">Anggota Tim</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">15+</h3>
                <p class="text-gray-600 mt-1">Penghargaan</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">98%</h3>
                <p class="text-gray-600 mt-1">Kepuasan Klien</p>
            </div>
        </div>
    </div>
</section>

@if($featuredProjects->count())
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Karya Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Proyek Terbaru dari Portofolio Kami</h2>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <a href="{{ route('portfolio.show', $project->slug) }}" class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ $project->featured_image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80' }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-blue-300 text-sm font-medium">{{ ucfirst($project->category) }}</span>
                        <h3 class="text-white text-xl font-bold mt-1">{{ $project->title }}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center px-8 py-3.5 bg-gray-900 text-white font-medium rounded-lg hover:bg-gray-800 transition">
                Lihat Semua Proyek
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

@if($services->count())
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">Apa Yang Kami Lakukan</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Keahlian Desain Kami</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition">
                <div class="w-14 h-14 bg-blue-600/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ $service->title }}</h3>
                <p class="text-gray-400 leading-relaxed">{{ $service->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($testimonials->count())
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Ulasan</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Apa Kata Klien Kami</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < $testimonial->rating; $i++)
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">"{{ $testimonial->content }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-blue-600 font-semibold text-sm">{{ substr($testimonial->name, 0, 1) }}</span>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900 text-sm">{{ $testimonial->name }}</p>
                        <p class="text-gray-500 text-xs">{{ $testimonial->role }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="py-20 bg-blue-600">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Mengubah Ruang Anda?</h2>
        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
            Mari ciptakan sesuatu yang luar biasa bersama. Jadwalkan konsultasi gratis dengan para ahli desain kami.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3.5 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition shadow-lg">
            Mulai Proyek Anda
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
