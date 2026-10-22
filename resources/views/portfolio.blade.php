@extends('layouts.app')

@section('title', 'Portofolio Kami - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1600&q=80" alt="Portfolio" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Portofolio Kami</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Kumpulan karya terbaik kami pada proyek hunian dan komersial.</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
            <a href="{{ route('portfolio') }}" class="px-5 py-2 rounded-full text-sm font-medium transition {{ !$category ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                Semua Proyek
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('portfolio', ['category' => $cat]) }}" class="px-5 py-2 rounded-full text-sm font-medium transition {{ $category === $cat ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                {{ ucfirst($cat) }}
            </a>
            @endforeach
        </div>

        @if($projects->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <a href="{{ route('portfolio.show', $project->slug) }}" class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ $project->featured_image ?? 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80' }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-blue-300 text-sm font-medium">{{ ucfirst($project->category) }}</span>
                        <h3 class="text-white text-xl font-bold mt-1">{{ $project->title }}</h3>
                        <p class="text-gray-300 text-sm mt-2 line-clamp-2 opacity-0 group-hover:opacity-100 transition">{{ $project->description }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Tidak ada proyek ditemukan</h3>
            <p class="text-gray-600">Cek kembali nanti untuk proyek baru atau jelajahi semua kategori.</p>
        </div>
        @endif
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Layanan</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Keahlian Desain Kami</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=600&q=80" alt="Residential Design" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">Desain Hunian</h3>
                    <p class="text-gray-600 text-sm mt-2">Menciptakan rumah indah dan fungsional yang sesuai gaya hidup Anda.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80" alt="Commercial Interiors" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">Interior Komersial</h3>
                    <p class="text-gray-600 text-sm mt-2">Ruang kerja yang menginspirasi, meningkatkan produktivitas dan meninggalkan kesan.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&q=80" alt="Custom Furniture" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-gray-900 text-lg">Furniture Kustom</h3>
                    <p class="text-gray-600 text-sm mt-2">Karya unik yang dirancang dan dibuat sesuai spesifikasi Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
