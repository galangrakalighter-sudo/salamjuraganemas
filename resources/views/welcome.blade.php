<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam Juragan Emas - Jual Beli Emas Terpercaya Bekasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; overflow-x: hidden; }
        .gold-gradient { background: linear-gradient(135deg, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c); }
        .bg-dark { background-color: #1a1a1a; }
        .text-gold { color: #d4af37; }
        .border-gold { border-color: #d4af37; }
        section {
            scroll-margin-top: 80px;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-dark text-white sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center relative">
            <div class="flex items-center space-x-2 z-10">
                <div class="w-10 h-10 gold-gradient rounded-full flex items-center justify-center">
                    <i class="fas fa-coins text-dark text-xl"></i>
                </div>
                <span class="font-bold text-lg md:text-xl tracking-tight uppercase">SALAM JURAGAN EMAS</span>
            </div>

            <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-8 text-sm font-semibold">
                <a href="#beranda" class="hover:text-gold transition">BERANDA</a>
                <a href="#harga" class="hover:text-gold transition">HARGA</a>
                <a href="#layanan" class="hover:text-gold transition">LAYANAN</a>
                <a href="#alur" class="hover:text-gold transition">ALUR JUAL</a>
            </div>

            <div class="flex items-center space-x-4 z-10">
                <div class="hidden md:block">
                    <a href="#kontak" class="border border-gold text-gold hover:bg-gold hover:text-dark px-4 py-2 rounded-md transition text-sm font-bold">
                        KONTAK ADMIN
                    </a>
                </div>
                <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-dark border-t border-gray-700 px-4 py-4 space-y-4">
            <a href="#beranda" class="block hover:text-gold text-center">BERANDA</a>
            <a href="#harga" class="block hover:text-gold text-center">HARGA</a>
            <a href="#layanan" class="block hover:text-gold text-center">LAYANAN</a>
            <a href="#alur" class="block hover:text-gold text-center">ALUR JUAL</a>
            <a href="#kontak" class="block text-gold font-bold text-center">KONTAK ADMIN</a>
        </div>
    </nav>

    <section id="beranda" class="relative bg-dark text-white py-12 md:py-24 overflow-hidden">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <div class="w-full md:w-3/4 lg:w-1/2 z-10 text-center">
                <p class="text-gold font-bold tracking-widest mb-2 uppercase text-xs md:text-sm">Transparan • Cepat • Amanah • Tanpa Ribet</p>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Salam <br><span class="text-gold">Juragan Emas</span></h1>
                <p class="text-gray-300 max-w-lg mx-auto text-sm md:text-base mb-8">
                    Jual beli logam mulia antam harga di jamin bersaing. Kami membeli segala kondisi emas anda dengan proses yang transparan dan terpercaya di Bekasi.
                </p>
                
                <div class="flex justify-center mb-12">
                    <a href="#harga" class="inline-block bg-[#CBA337] text-black font-black px-12 py-4 rounded-full shadow-lg hover:scale-105 transition duration-300 tracking-tight">
                        CEK HARGA HARI INI
                    </a>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 md:gap-12 mt-8">
                    <div class="text-center sm:text-left">
                        <h2 class="text-2xl md:text-3xl font-serif font-bold text-gold italic">"Emas Anda, Amanah Kami"</h2>
                        <p class="text-white mt-1 text-sm md:text-base">Marakas Square, Bekasi Utara</p>
                    </div>
                    <div class="w-32 md:w-48">
                        <img src="path/to/your/image.png" alt="Juragan Emas" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="harga" class="py-16 bg-white">
        <div class="container mx-auto px-4 mb-20">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 uppercase">Harga Emas Update Hari Ini</h2>
                <div class="h-1 w-20 bg-[#CBA337] mx-auto"></div>
            </div>
            
            <div class="overflow-x-auto bg-white rounded-xl shadow-xl border border-gray-100">
                <table class="w-full text-left min-w-[600px]">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="px-6 py-4 text-center">Berat</th>
                            <th class="px-6 py-4 text-center">Harga Buy-back</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($emas as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-gray-600 text-center">{{ $item->berat }}</td>
                                <td class="px-6 py-4 text-green-600 font-bold text-center">{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-[10px] md:text-xs text-gray-500 text-center uppercase tracking-widest font-bold px-4">
                * RATE BUY-BACK BERLAKU UNTUK TRANSAKSI LANGSUNG KE ALAMAT SALAM JURAGAN EMAS
            </p>
        </div>

        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 uppercase">Harga Logam Mulia Update Hari Ini</h2>
                <div class="h-1 w-20 bg-[#CBA337] mx-auto"></div>
            </div>
            
            <div class="overflow-x-auto bg-white rounded-xl shadow-xl border border-gray-100">
                <table class="w-full text-left min-w-[600px]">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="px-6 py-4 text-center">Jenis Logam Mulia</th>
                            <th class="px-6 py-4 text-center">Kadar</th>
                            <th class="px-6 py-4 text-center">Harga Buy-back</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($logam_mulia as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-gray-600 text-center">{{ $item->jenis }}</td>
                                <td class="px-6 py-4 text-green-600 font-bold text-center">{{ $item->kadar }}</td>
                                <td class="px-6 py-4 text-green-600 font-bold text-center">{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-[10px] md:text-xs text-gray-500 text-center uppercase tracking-widest font-bold px-4">
                * RATE BUY-BACK BERLAKU UNTUK TRANSAKSI LANGSUNG KE ALAMAT SALAM JURAGAN EMAS
            </p>
        </div>
    </section>

    <section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-black mb-4 leading-tight">Membeli Semua <br> Kondisi Emas</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Emas Toko Lain</p>
                </div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Emas Tanpa Surat</p>
                </div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Emas Dengan Surat</p>
                </div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Emas Hilang Sebelah</p>
                </div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Logam Mulia Antam <br> Segala Kondisi</p>
                </div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center">
                    <p class="font-bold text-black uppercase text-sm">Logam Mulia Selain <br> Antam</p>
                </div>
            </div>
            
            <div class="bg-[#CBA337] p-5 rounded-xl shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center mb-12">
                <p class="font-bold text-black uppercase text-sm">Emas Patah / Rusak</p>
            </div>

            <div class="bg-black text-white p-8 md:p-12 rounded-[2.5rem] text-center mb-12 shadow-xl">
                <h3 class="text-[#CBA337] text-2xl md:text-3xl font-serif italic font-bold mb-6 leading-tight">
                    "Segala Kondisi Emas kami Beli Dengan Harga Tinggi"
                </h3>
                <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Rate Buy-back berlaku untuk segala kondisi: rusak, patah, tanpa surat dan lain sebagainya.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#111111] text-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-serif font-medium">Keunggulan Kami</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-[#CBA337]/30 bg-black/40 p-8 md:p-10 rounded-3xl text-center">
                    <h4 class="text-[#CBA337] text-2xl font-bold mb-4">Rate Buy-back Penuh</h4>
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed">Rate Buy-back seluruhnya diterima customer, tanpa potongan apapun.</p>
                </div>
                <div class="border border-[#CBA337]/30 bg-black/40 p-8 md:p-10 rounded-3xl text-center">
                    <h4 class="text-[#CBA337] text-2xl font-bold mb-4">Transfer Instan</h4>
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed">Transfer dana dilakukan setelah pengecekan barang, pengujian kadar dan timbang bobot di waktu yang sama.</p>
                </div>
            </div>
            <p class="mt-4 text-[10px] md:text-xs text-gray-500 text-center uppercase tracking-widest font-bold px-4">
                "Kondisi minus tetap di terima, dengan penyesuaian harga"
            </p>
        </div>
    </section>

    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-4xl md:text-5xl font-serif text-center mb-16 text-black">Apa Kata Mereka</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-10 rounded-[2.5rem] text-center relative min-h-[200px] flex items-center justify-center">
                        <p class="text-gray-600 leading-relaxed italic">
                            "Harga di Salam Juragan Emas sangat bersaing. Emas saya yang patah tetap dihargai tinggi dan uangnya langsung ditransfer di tempat."
                        </p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-8 py-2 -mt-7 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-10 rounded-[2.5rem] text-center relative min-h-[200px] flex items-center justify-center">
                        <p class="text-gray-600 leading-relaxed italic">
                            "Harga di Salam Juragan Emas sangat bersaing. Emas saya yang patah tetap dihargai tinggi dan uangnya langsung ditransfer di tempat."
                        </p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-8 py-2 -mt-7 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-10 rounded-[2.5rem] text-center relative min-h-[200px] flex items-center justify-center">
                        <p class="text-gray-600 leading-relaxed italic">
                            "Harga di Salam Juragan Emas sangat bersaing. Emas saya yang patah tetap dihargai tinggi dan uangnya langsung ditransfer di tempat."
                        </p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-8 py-2 -mt-7 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                        <i class="fas fa-star text-[#CBA337]"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alur" class="py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4 max-w-6xl text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-2 uppercase">Mulai Bertransaksi</h2>
            <p class="text-gray-500 italic mb-16">Hanya dengan 3 langkah praktis</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:scale-105 transition">
                    <div class="w-16 h-16 bg-[#ebc351] rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                    <h3 class="font-bold mb-4">HUBUNGI ADMIN</h3>
                    <p class="text-gray-500 text-sm">Hubungi WhatsApp Salam Juragan Emas untuk cek harga hari ini dan isi form pemesanan.</p>
                </div>
                <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:scale-105 transition">
                    <div class="w-16 h-16 bg-[#ebc351] rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                    <h3 class="font-bold mb-4">DATANG KE TOKO</h3>
                    <p class="text-gray-500 text-sm">Datang ke alamat kami untuk serah terima emas dan pengecekan di tempat (timbang & uji kadar).</p>
                </div>
                <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:scale-105 transition">
                    <div class="w-16 h-16 bg-[#ebc351] rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                    <h3 class="font-bold mb-4">TERIMA PEMBAYARAN</h3>
                    <p class="text-gray-500 text-sm">Pembayaran dilakukan secara transfer instan menggunakan harga update pada saat hari transaksi..</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold mb-2">LOKASI TOKO</h2>
                <p class="text-gray-600">Silahkan kunjungi gerai kami di Bekasi Utara</p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-gray-100 h-96">
                <!-- Placeholder for Map -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5213!2d107.0123!3d-6.2345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTQnMDQuMiJTIDEwN8KwMDAnNDQuMyJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-[#CBA337] py-12 px-6 md:px-12 rounded-[2.5rem] text-center shadow-xl">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-black mb-4">INGIN JUAL EMAS SEKARANG?</h2>
                <p class="text-black font-bold text-sm md:text-base mb-10 uppercase tracking-widest">Cepat • Akurat • Terpercaya</p>
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-black text-white font-bold px-10 py-4 rounded-full inline-block hover:scale-105 transition">
                    HUBUNGI WHATSAPP ADMIN
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white py-12 md:py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-10 md:space-y-0">
                
                <div class="flex flex-col">
                    <div class="flex items-center mb-4">
                        <h3 class="text-[#CBA337] font-serif font-bold text-2xl md:text-3xl tracking-wide uppercase">
                            SALAM JURAGAN EMAS
                        </h3>
                    </div>
                    <div class="space-y-1">
                        <p class="text-white font-bold text-lg md:text-xl leading-tight">
                            Marakas Square, Kios CC1/09
                        </p>
                        <p class="text-gray-500 text-base md:text-lg leading-relaxed">
                            Bahagia, Babelan, Bekasi Utara
                        </p>
                    </div>
                </div>

                <div class="flex flex-col space-y-4 w-full md:w-auto">
                    <a href="https://www.instagram.com/salamjuraganemas/" target="_blank" rel="noopener" 
                    class="flex items-center text-[#CBA337] hover:opacity-80 transition text-lg md:text-xl font-medium">
                        <i class="fab fa-instagram mr-3 text-2xl"></i>
                        @salamjuraganemas
                    </a>
                    <a href="https://www.tiktok.com/@salamjuraganemas" target="_blank" rel="noopener" 
                    class="flex items-center text-[#CBA337] hover:opacity-80 transition text-lg md:text-xl font-medium">
                        <i class="fab fa-tiktok mr-3 text-2xl"></i>
                        @salamjuraganemas
                    </a>
                </div>
            </div>

            <div class="mt-16 pt-8 text-center text-gray-600 text-sm md:text-base border-t border-gray-900">
                &copy; 2025 Salam Juragan Emas. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>

</body>
</html>