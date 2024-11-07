@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="p-6 text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Selamat Datang</h1>
        
        <div class="grid md:grid-cols-2 gap-6 items-center">
            <div>
                <p id="welcomeText" class="text-gray-700 text-lg mb-4 animate__animated">
                    Kami senang Anda berkunjung! Temukan berbagai informasi Tentang saya di sini.
                </p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script>
document.addEventListener('DOMContentLoaded', function() {
    const welcomeText = document.getElementById('welcomeText');
    
    // Animasi teks menggunakan Bootstrap/Animate.css
    function animateText() {
        welcomeText.classList.remove('animate__bounce');
        void welcomeText.offsetWidth; // Trigger reflow
        welcomeText.classList.add('animate__bounce');
    }

    // Jalankan animasi saat halaman dimuat
    animateText();

    // Ulangi animasi setiap beberapa detik
    setInterval(animateText, 5000);
});
</script>
@endpush
@endsection
