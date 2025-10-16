<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<!-- Hero Section dengan Gradient Background -->
<div class="min-h-screen bg-gradient-to-br from-purple-600 via-pink-600 to-blue-600 flex items-center justify-center">
    <div class="text-center text-white px-6">
        <h1 class="text-6xl font-bold mb-6 animate-pulse">
            Lunaray Beauty Factory
        </h1>
        <p class="text-xl mb-8 opacity-90">
            Solusi Maklon Kosmetik Halal & BPOM
        </p>
        <div class="space-x-4">
            <button class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                Pelajari Lebih Lanjut
            </button>
            <button class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition duration-300">
                Hubungi Kami
            </button>
        </div>
    </div>
</div>

<!-- Features Section dengan Gradient Card -->
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">
            Layanan Kami
        </h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl p-8 text-white transform hover:scale-105 transition duration-300 shadow-xl">
                <div class="text-4xl mb-4">✨</div>
                <h3 class="text-2xl font-bold mb-4">Kosmetik Halal</h3>
                <p class="opacity-90">Produk kosmetik berkualitas tinggi dengan sertifikat halal resmi</p>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl p-8 text-white transform hover:scale-105 transition duration-300 shadow-xl">
                <div class="text-4xl mb-4">🏭</div>
                <h3 class="text-2xl font-bold mb-4">Pabrik Modern</h3>
                <p class="opacity-90">Fasilitas produksi berstandar internasional dengan teknologi terdepan</p>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl p-8 text-white transform hover:scale-105 transition duration-300 shadow-xl">
                <div class="text-4xl mb-4">📋</div>
                <h3 class="text-2xl font-bold mb-4">Sertifikat BPOM</h3>
                <p class="opacity-90">Semua produk telah terdaftar dan disetujui oleh BPOM</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section dengan Animated Gradient -->
<div class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-bounce"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full animate-ping"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center text-white relative z-10">
        <h2 class="text-5xl font-bold mb-6">
            Siap Memulai Brand Kosmetik Anda?
        </h2>
        <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
            Bergabunglah dengan ribuan brand yang telah mempercayai Lunaray Beauty Factory sebagai mitra produksi mereka
        </p>
        <div class="space-x-4">
            <button class="bg-white text-purple-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
                Konsultasi Gratis
            </button>
            <button class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-purple-600 transition duration-300">
                Lihat Portfolio
            </button>
        </div>
    </div>
</div>

<!-- Footer dengan Gradient -->
<div class="bg-gradient-to-t from-gray-900 to-gray-800 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-4">Lunaray Beauty Factory</h3>
        <p class="text-gray-300 mb-8">Solusi Maklon Kosmetik Terpercaya</p>
        <div class="flex justify-center space-x-6">
            <a href="#" class="text-2xl hover:text-pink-400 transition duration-300">📱</a>
            <a href="#" class="text-2xl hover:text-pink-400 transition duration-300">📧</a>
            <a href="#" class="text-2xl hover:text-pink-400 transition duration-300">🌐</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
