@extends('layouts.app')

@section('title', 'Tim Kami - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600&q=80" alt="Our Team" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Kenali Visioner Desain Kami</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Tim berbakat di balik setiap ruang istimewa yang kami ciptakan.</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($members->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($members as $member)
            <div class="group text-center">
                <div class="relative overflow-hidden rounded-2xl mb-6 shadow-lg">
                    <div class="aspect-[3/4] overflow-hidden">
                       <img src="{{ Str::startsWith($member->photo, 'http') ? $member->photo : asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-center pb-6">
                        <div class="flex items-center gap-3">
                            @if($member->email)
                            <a href="mailto:{{ $member->email }}" class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>
                            @endif
                            <a href="#" class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900">{{ $member->name }}</h3>
                <p class="text-blue-600 font-medium text-sm mt-1">{{ $member->role }}</p>
                @if($member->bio)
                <p class="text-gray-600 text-sm mt-3 line-clamp-2">{{ $member->bio }}</p>
                @endif
            </div>
            @endforeach
        </div>
        @else
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['name' => 'Sarah Anderson', 'role' => 'Creative Director', 'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80'],
                ['name' => 'Michael Chen', 'role' => 'Lead Designer', 'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80'],
                ['name' => 'Emily Roberts', 'role' => 'Senior Architect', 'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80'],
                ['name' => 'David Kim', 'role' => 'Project Manager', 'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80'],
            ] as $member)
            <div class="group text-center">
                <div class="relative overflow-hidden rounded-2xl mb-6 shadow-lg">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ $member['photo'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900">{{ $member['name'] }}</h3>
                <p class="text-blue-600 font-medium text-sm mt-1">{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Bergabung dengan Tim Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Kami Selalu Mencari Talenta</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Apakah Anda bersemangat tentang desain dan mencari tempat untuk berkembang? Kami selalu mencari pemikir kreatif yang berbagi visi kami untuk ruang yang luar biasa.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Hubungi Kami
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="Team Working" class="rounded-2xl shadow-xl w-full">
            </div>
        </div>
    </div>
</section>
@endsection
