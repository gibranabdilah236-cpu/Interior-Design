@extends('layouts.app')

@section('title', 'Tentang Kami - Luxe Interiors')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <img src="https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=1600&q=80" alt="About Luxe" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Mendefinisikan Kejelasan Arsitektural</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Menciptakan ruang yang menginspirasi, mengangkat, dan tahan lama.</p>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Cerita Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Warisan Keunggulan Desain</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Didirikan pada 2005, Luxe Interiors dimulai dengan visi sederhana: menciptakan ruang yang seimbang antara keindahan dan fungsionalitas. Yang dimulai sebagai studio kecil kini berkembang menjadi salah satu firma desain interior terkemuka.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Selama dua dekade terakhir, kami berkesempatan mengubah ratusan rumah, kantor, dan ruang komersial. Setiap proyek mencerminkan komitmen kami terhadap keunggulan dan pemahaman mendalam atas kebutuhan unik klien.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Pendekatan kami menggabungkan prinsip desain yang abadi dengan inovasi kontemporer, memastikan setiap ruang yang kami ciptakan tidak hanya memukau secara estetis tetapi juga sempurna untuk kehidupan modern.
                </p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=80" alt="Our Story" class="rounded-2xl shadow-2xl w-full">
                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white rounded-xl p-6 shadow-lg">
                    <span class="text-3xl font-bold">20+</span>
                    <span class="block text-sm text-blue-100">Tahun Keunggulan</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80" alt="Vision" class="rounded-2xl shadow-2xl w-full">
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Visi & Nilai</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Filosofi Desain Kami</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami percaya bahwa desain hebat harus dapat diakses oleh semua orang. Filosofi kami berpusat pada penciptaan ruang yang mencerminkan kepribadian dan gaya hidup klien kami sambil mempertahankan standar kualitas dan pengerjaan tertinggi.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Pendekatan Berpusat pada Klien</h4>
                            <p class="text-gray-600 text-sm">Setiap keputusan desain dimulai dengan memahami kebutuhan dan aspirasi Anda.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Desain Berkelanjutan</h4>
                            <p class="text-gray-600 text-sm">Kami memprioritaskan material ramah lingkungan dan solusi hemat energi.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Perhatian pada Detail</h4>
                            <p class="text-gray-600 text-sm">Dari tata letak besar hingga aksen terkecil, setiap elemen penting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Mengapa Memilih Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Nilai Inti</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Inovasi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Mendorong batas dengan konsep desain mutakhir dan solusi cerdas.</p>
            </div>
            <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Hasrat</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Kecintaan sejati pada desain yang tercermin dalam setiap proyek kami.</p>
            </div>
            <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Kualitas</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Standar tanpa kompromi dalam material, pengerjaan, dan pelaksanaan akhir.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-blue-600">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Mengubah Ruang Anda?</h2>
        <p class="text-blue-100 text-lg mb-8">Mari diskusikan visi Anda dan wujudkan menjadi nyata.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3.5 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition shadow-lg">
            Mulai Proyek Anda
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
