@extends('layouts.app')

@section('title', $project->title . ' - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="{{ $project->featured_image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1600&q=80' }}" alt="{{ $project->title }}" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-300 text-sm font-medium rounded-full mb-4 border border-blue-500/30">{{ ucfirst($project->category) }}</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">{{ $project->title }}</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">{{ $project->description }}</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <div class="lg:col-span-2">
                <div class="aspect-[16/9] rounded-2xl overflow-hidden shadow-xl mb-8">
                    <img src="{{ $project->featured_image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=80' }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Proyek Ini</h2>
                <p class="text-gray-600 leading-relaxed mb-6">{{ $project->description }}</p>
                <p class="text-gray-600 leading-relaxed">
                    Proyek ini menunjukkan komitmen kami untuk menciptakan ruang luar biasa yang memadukan estetika dengan fungsionalitas. Setiap detail dipertimbangkan dengan cermat untuk menghasilkan hasil yang melampaui harapan.
                </p>
            </div>
            <div>
                <div class="bg-gray-50 rounded-2xl p-8 sticky top-24">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">Detail Proyek</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-500 text-sm">Kategori</span>
                            <span class="text-gray-900 font-medium text-sm">{{ ucfirst($project->category) }}</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-500 text-sm">Status</span>
                            <span class="text-gray-900 font-medium text-sm">{{ ucfirst($project->status) }}</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-500 text-sm">Unggulan</span>
                            <span class="text-gray-900 font-medium text-sm">{{ $project->is_featured ? 'Ya' : 'Tidak' }}</span>
                        </div>
                        <div class="flex justify-between pb-3">
                            <span class="text-gray-500 text-sm">Selesai</span>
                            <span class="text-gray-900 font-medium text-sm">{{ $project->created_at->format('M Y') }}</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="mt-8 block w-full text-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Mulai Proyek Anda
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Siap Mengubah Ruang Anda?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Biarkan kami mewujudkan visi Anda. Hubungi kami untuk konsultasi gratis.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
            Hubungi Kami
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>
@endsection
