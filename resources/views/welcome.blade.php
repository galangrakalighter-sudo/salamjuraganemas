<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam Juragan Emas - Jual Beli Emas Terpercaya Bekasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">
    <script>
    tailwind.config = {
        theme: {
        extend: {
            screens: {
            'xs': '360px', // Menambahkan breakpoint baru mulai dari 360px
            'xss': '52px', // Menambahkan breakpoint baru mulai dari 360px
            }
        }
        }
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&family=Inter:wght@400;700&display=swap');
        
        /* Mencegah kebocoran layar/garis putih di sebelah kanan */
        html, body { 
            font-family: 'Poppins', sans-serif; 
            overflow-x: hidden; 
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Memberikan ruang di atas karena navbar menggunakan 'fixed' */
        body {
            padding-top: 80px; 
        }

        @media (max-width: 768px) {
            body { padding-top: 70px; }
        }
        
        .gold-gradient { background: linear-gradient(135deg, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c); }
        .bg-dark { background-color: #1a1a1a; }
        .text-gold { color: #d4af37; }
        .border-gold { border-color: #d4af37; }
        section { scroll-margin-top: 80px; }

        .playfair { font-family: 'Playfair Display', serif; }
        .inter { font-family: 'Inter', sans-serif; }
        
        .miring-manual {
            display: inline-block;
            transform: skewX(-15deg);
        }

        /* Perbaikan khusus untuk margin yang menyebabkan overflow di tablet */
        @media (min-width: 768px) and (max-width: 1024px) {
            .hero-slogan { margin-right: 0 !important; }
        }

        /* Scroll halus untuk tabel di mobile */
        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-dark text-white fixed top-0 left-0 w-full z-50 shadow-lg">
        <div class="container mx-auto px-4 py-3 md:py-4 flex justify-between items-center relative">
            <div class="flex items-center z-10 shrink-0">
                <img src="{{ asset('storage/logo.png') }}" alt="Logo Salam Juragan Emas" class="h-10 md:h-16 lg:h-20 w-auto object-contain">
            </div>

            <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2 space-x-6 lg:space-x-8 text-xs lg:text-sm font-semibold">
                <a href="#beranda" class="hover:text-gold transition uppercase">BERANDA</a>
                <a href="#harga_emas" class="hover:text-gold transition uppercase">HARGA</a>
                <a href="#layanan" class="hover:text-gold transition uppercase">LAYANAN</a>
                <a href="#alur" class="hover:text-gold transition uppercase">ALUR JUAL</a>
            </div>

            <div class="flex items-center space-x-4 z-10">
                <div class="hidden md:block">
                    <a href="#kontak" class="border border-gold text-gold hover:bg-gold hover:text-dark px-4 py-2 rounded-md transition text-xs font-bold uppercase">
                        KONTAK ADMIN
                    </a>
                </div>
                <button id="menu-btn" class="lg:hidden text-2xl focus:outline-none text-gold">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden lg:hidden bg-dark border-t border-gray-700 px-4 py-6 space-y-4">
            <a href="#beranda" class="block hover:text-gold text-center text-lg uppercase">BERANDA</a>
            <a href="#harga_emas" class="block hover:text-gold text-center text-lg uppercase">HARGA</a>
            <a href="#layanan" class="block hover:text-gold text-center text-lg uppercase">LAYANAN</a>
            <a href="#alur" class="block hover:text-gold text-center text-lg uppercase">ALUR JUAL</a>
            <a href="#kontak" class="block text-gold font-bold text-center text-lg border border-gold rounded-lg py-2 uppercase">KONTAK ADMIN</a>
        </div>
    </nav>

    <section id="beranda" class="md:mt-[-1%] sm:mt-[-1%] xs:mt-[-2%] xss:mt-[-12%] relative bg-dark text-white overflow-hidden py-10 md:py-20">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <div class="w-full lg:w-3/4 z-10 text-center">
                <p class="text-gold font-bold tracking-widest mb-4 uppercase text-[10px] sm:text-xs md:text-2xl">Transparan • Cepat • Amanah • Tanpa Ribet</p>
                <h1 class="text-4xl md:text-7xl lg:text-8xl font-bold mb-6 playfair leading-tight">Salam <br><span class="text-gold miring-manual">Juragan Emas</span></h1>
                <p class="text-gray-300 mx-auto text-sm md:text-2xl mb-10 inter max-w-3xl">
                    Jual beli logam mulia antam harga di jamin bersaing. Kami membeli segala kondisi emas anda dengan proses yang transparan dan terpercaya di Bekasi.
                </p>
                
                <div class="flex justify-center mb-16">
                    <a href="#harga_emas" class="inline-block bg-[#CBA337] text-black font-black px-8 md:px-12 py-3 md:py-4 rounded-full shadow-lg hover:scale-105 transition duration-300 tracking-tight text-xs md:text-base">
                        CEK HARGA HARI INI
                    </a>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center gap-8 lg:gap-16 w-full">
                    <div class="text-center md:text-left">
                        <h2 class="text-xl md:text-4xl font-serif font-bold text-gold miring-manual playfair">"Emas Anda, Amanah Kami"</h2>
                        <p class="text-white mt-2 text-xs md:text-base inter">Marakas Square, Bekasi Utara</p>
                    </div>
                    <div class="w-40 md:w-72 xs:mb-[-12%] sm:mb-[-6.5%] md:mb-[-10.8%] lg:mb-[-10.6%] xl:mb-[-8%]">
                        <img src="{{ asset('storage/orang.webp') }}" alt="Juragan Emas" class="w-full h-auto bg-dark">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="harga_emas" class="py-12 md:py-20">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-5xl font-bold mb-2 uppercase playfair leading-tight">Harga Emas Update Setiap Hari</h2>
                <p class="mt-2 text-[10px] md:text-xl text-gray-500 uppercase tracking-widest inter">Cek Harga terbaru Anda hanya di Salam Juragan Emas</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden table-container">
                <table class="w-full text-left min-w-[300px]">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="px-4 md:px-6 py-4 text-center text-gold text-sm md:text-3xl font-bold">Berat</th>
                            <th class="px-4 md:px-6 py-4 text-center text-gold text-sm md:text-3xl font-bold">Harga Buy-back</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($emas as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 md:px-6 py-4 text-gray-600 text-center text-xs md:text-2xl font-medium">{{ $item->berat }}</td>
                                <td class="px-4 md:px-6 py-4 text-green-600 font-bold text-center text-xs md:text-2xl">{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-6 text-[9px] md:text-base text-gray-400 text-center font-bold uppercase tracking-tight px-4 italic">
                * RATE BUY-BACK BERLAKU UNTUK TRANSAKSI LANGSUNG KE ALAMAT SALAM JURAGAN EMAS
            </p>
        </div>
    </section>

    <section id="harga_logam" class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-5xl font-bold mb-2 uppercase playfair leading-tight">Harga Logam Mulia Update Setiap Hari</h2>
                <p class="mt-2 text-[10px] md:text-xl text-gray-500 uppercase tracking-widest inter">Cek Harga terbaru Anda hanya di Salam Juragan Emas</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden table-container overflow-x-auto">
                <table class="w-full text-left min-w-[500px] md:min-w-full">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="px-3 md:px-6 py-4 text-center text-gold text-sm md:text-3xl font-bold">Jenis Logam Mulia</th>
                            <th class="px-3 md:px-6 py-4 text-center text-gold text-sm md:text-3xl font-bold">Kadar</th>
                            <th class="px-3 md:px-6 py-4 text-center text-gold text-sm md:text-3xl font-bold">Harga Buy-back</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($logam_mulia as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-3 md:px-6 py-4 text-gray-600 text-center text-xs md:text-2xl font-medium">{{ $item->jenis }}</td>
                                <td class="px-3 md:px-6 py-4 text-green-600 font-bold text-center text-xs md:text-2xl">{{ $item->kadar }}%</td>
                                <td class="px-3 md:px-6 py-4 text-green-600 font-bold text-center text-xs md:text-2xl">{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-6 text-[9px] md:text-base text-gray-400 text-center font-bold uppercase tracking-tight px-4 italic">
                * RATE BUY-BACK BERLAKU UNTUK TRANSAKSI LANGSUNG KE ALAMAT SALAM JURAGAN EMAS
            </p>
        </div>
    </section>

    <section id="layanan" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-7xl lg:text-8xl font-serif font-bold text-black mb-4 leading-tight playfair">Membeli Semua <br> Kondisi Emas</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Emas Toko Lain</p></div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Emas Tanpa Surat</p></div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Emas Dengan Surat</p></div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Emas Hilang Sebelah</p></div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Logam Mulia Antam <br> Segala Kondisi</p></div>
                <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center"><p class="font-bold text-black uppercase text-sm md:text-xl">Logam Mulia Selain <br> Antam</p></div>
            </div>
            
            <div class="bg-[#CBA337] p-5 rounded-xl shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center text-center mb-16">
                <p class="font-bold text-black uppercase text-sm md:text-xl">Emas Patah / Rusak</p>
            </div>

            <div class="bg-black text-white p-6 md:p-16 rounded-[2.5rem] text-center shadow-xl">
                <h3 class="text-[#CBA337] text-lg md:text-4xl font-serif miring-manual font-bold mb-4 md:mb-6 leading-tight playfair uppercase">
                    "Segala Kondisi Emas kami Beli Dengan Harga Tinggi"
                </h3>
                <p class="text-gray-400 text-xs md:text-xl leading-relaxed inter">
                    Rate Buy-back berlaku untuk segala kondisi: rusak, patah, tanpa surat dan lain sebagainya.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-[#111111] text-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-6xl font-serif font-medium playfair uppercase tracking-tight">Keunggulan Kami</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div class="border border-[#CBA337]/30 bg-black/40 p-8 md:p-12 rounded-3xl text-center hover:border-gold transition">
                    <h4 class="text-[#CBA337] text-xl md:text-2xl font-bold mb-4 playfair uppercase">Rate Buy-back Penuh</h4>
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed inter">Rate Buy-back seluruhnya diterima customer, tanpa potongan apapun.</p>
                </div>
                <div class="border border-[#CBA337]/30 bg-black/40 p-8 md:p-12 rounded-3xl text-center hover:border-gold transition">
                    <h4 class="text-[#CBA337] text-xl md:text-2xl font-bold mb-4 playfair uppercase">Transfer Instan</h4>
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed inter">Transfer dana dilakukan setelah pengecekan barang di waktu yang sama.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <p class="text-gray-400 text-xs md:text-xl miring-manual leading-relaxed inter italic">
                    "Kondisi minus tetap di terima, dengan penyesuaian harga"
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl md:text-6xl font-serif text-center mb-12 md:mb-16 text-black playfair uppercase tracking-tight">Apa Kata Mereka</h2>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-6 md:p-10 rounded-[2rem] md:rounded-[2.5rem] text-center relative min-h-[150px] flex items-center justify-center">
                        <p class="text-gray-600 text-sm md:text-base inter">"Ga salah Jual emas di tempat ini, harganya bersaing dibanding toko emas lainnya"</p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-6 py-2 -mt-6 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-6 md:p-10 rounded-[2rem] md:rounded-[2.5rem] text-center relative min-h-[150px] flex items-center justify-center">
                        <p class="text-gray-600 text-sm md:text-base inter">"Solusi terbaik transaksi emas disini. Cepat prosesnya dan amanah. Sukses selalu"</p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-6 py-2 -mt-6 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-6 md:p-10 rounded-[2rem] md:rounded-[2.5rem] text-center relative min-h-[150px] flex items-center justify-center">
                        <p class="text-gray-600 text-sm md:text-base inter">"Harga jualnya lebih menguntungkan daripada jual di toko emas"</p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-6 py-2 -mt-6 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-[#f0f2f5] p-6 md:p-10 rounded-[2rem] md:rounded-[2.5rem] text-center relative min-h-[150px] flex items-center justify-center">
                        <p class="text-gray-600 text-sm md:text-base inter">"Harga buyback termasuk harga yg tinggi dari harga buyback aslinya🤩"</p>
                    </div>
                    <div class="bg-white border-2 border-sky-400 rounded-full px-6 py-2 -mt-6 z-10 shadow-sm flex space-x-1">
                        <i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i><i class="fas fa-star text-[#CBA337] text-xs"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alur" class="py-12 md:py-20 bg-[#f8f9fa]">
        <div class="container mx-auto px-4 max-w-6xl text-center">
            <h2 class="text-3xl md:text-6xl font-serif font-bold mb-2 uppercase playfair tracking-tight">Mulai Bertransaksi</h2>
            <p class="text-gray-500 text-sm md:text-3xl mb-12 md:mb-16 playfair leading-relaxed">Hanya dengan 3 langkah praktis</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                <div class="bg-white p-8 md:p-12 rounded-[2rem] md:rounded-[3rem] shadow-xl flex flex-col items-center transition hover:scale-105 border border-gray-100">
                    <div class="w-12 h-12 md:w-20 md:h-20 bg-[#ebc351] rounded-full flex items-center justify-center text-xl md:text-3xl font-bold mb-6 shadow-inner">1</div>
                    <h3 class="text-lg md:text-2xl font-black mb-4 playfair tracking-tight uppercase">HUBUNGI ADMIN</h3>
                    <p class="text-gray-500 text-xs md:text-base inter leading-relaxed">Hubungi WhatsApp Salam Juragan Emas untuk cek harga hari ini dan isi form pemesanan.</p>
                </div>
                <div class="bg-white p-8 md:p-12 rounded-[2rem] md:rounded-[3rem] shadow-xl flex flex-col items-center transition hover:scale-105 border border-gray-100">
                    <div class="w-12 h-12 md:w-20 md:h-20 bg-[#ebc351] rounded-full flex items-center justify-center text-xl md:text-3xl font-bold mb-6 shadow-inner">2</div>
                    <h3 class="text-lg md:text-2xl font-black mb-4 playfair tracking-tight uppercase">DATANG KE TOKO</h3>
                    <p class="text-gray-500 text-xs md:text-base inter leading-relaxed">Datang ke alamat kami untuk serah terima emas dan pengecekan di tempat (timbang & uji kadar).</p>
                </div>
                <div class="bg-white p-8 md:p-12 rounded-[2rem] md:rounded-[3rem] shadow-xl flex flex-col items-center transition hover:scale-105 border border-gray-100">
                    <div class="w-12 h-12 md:w-20 md:h-20 bg-[#ebc351] rounded-full flex items-center justify-center text-xl md:text-3xl font-bold mb-6 shadow-inner">3</div>
                    <h3 class="text-lg md:text-2xl font-black mb-4 playfair tracking-tight uppercase">TERIMA DANA</h3>
                    <p class="text-gray-500 text-xs md:text-base inter leading-relaxed">Pembayaran dilakukan secara transfer instan menggunakan harga update pada hari transaksi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl text-center">
            <div class="mb-10">
                <h2 class="text-xl md:text-5xl font-bold mb-2 uppercase tracking-tight">LOKASI TOKO</h2>
                <h2 class="text-2xl md:text-7xl font-bold text-gray-600 playfair miring-manual">Salam <span class="text-gold miring-manual">Juragan Emas</span></h2>
            </div>
            <div class="rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border-2 md:border-4 border-gray-100 h-[300px] md:h-[500px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.80760497499!2d107.01898108496567!3d-6.156516944418171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698991302cffff%3A0x885285f38b783a7b!2sKios%20Marakas%2C%20Blk.%20A1%20No.15%2C%20Babelan%20Kota%2C%20Kec.%20Babelan%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017610!5e0!3m2!1sid!2sid!4v1768201705785!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-[#CBA337] py-10 md:py-12 px-6 md:px-16 rounded-[2rem] md:rounded-[3rem] text-center shadow-2xl">
                <h2 class="text-2xl md:text-5xl font-serif font-bold text-black mb-4 playfair leading-tight uppercase">INGIN JUAL EMAS SEKARANG?</h2>
                <h2 class="text-lg md:text-4xl font-serif text-black mb-8 inter miring-manual">DAPATKAN PENAWARAN HARGA TERTINGGI!</h2>
                <p class="text-black font-bold text-[10px] md:text-lg mb-10 uppercase tracking-widest miring-manual leading-relaxed">
                    Proses Cepat • Timbangan Akurat • Dana cair detik itu juga
                </p>
                <a href="https://wa.me/6285210541006" target="_blank" class="bg-black text-white font-bold px-6 md:px-12 py-3 md:py-4 rounded-full inline-block hover:scale-105 transition shadow-xl text-sm md:text-lg uppercase">
                    HUBUNGI WHATSAPP ADMIN
                </a>
                <p class="text-black font-bold text-[9px] md:text-sm mt-6 uppercase tracking-widest">Klik tombol diatas untuk langsung chat</p>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white py-12 md:py-20">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-10">
                <div class="flex flex-col">
                    <h3 class="text-[#CBA337] font-serif font-bold text-xl md:text-3xl tracking-wide uppercase playfair mb-4 md:mb-6">
                        SALAM JURAGAN EMAS
                    </h3>
                    <div class="space-y-1">
                        <p class="text-white font-bold text-base md:text-xl">Marakas Square, Kios CC1/09</p>
                        <p class="text-gray-500 text-xs md:text-lg">Bahagia, Babelan, Bekasi Utara</p>
                    </div>
                </div>

                <div class="flex flex-col space-y-4">
                    <a href="https://www.tiktok.com/@salamjuraganemas" target="_blank" class="flex items-center text-[#CBA337] hover:text-white transition text-sm md:text-3xl font-medium playfair miring-manual">
                        <i class="fab fa-tiktok mr-3 text-lg md:text-2xl"></i> salamjuraganemas
                    </a>
                    <a href="https://www.facebook.com/share/16q53CQXRX/" target="_blank" class="flex items-center text-[#CBA337] hover:text-white transition text-sm md:text-3xl font-medium playfair miring-manual">
                        <i class="fab fa-facebook mr-3 text-lg md:text-2xl"></i> Salam -JuraganEmas
                    </a>
                    <a href="https://www.instagram.com/salamjuraganemas?igsh=MWNveHo1bmhkZm0yNg==" target="_blank" class="flex items-center text-[#CBA337] hover:text-white transition text-sm md:text-3xl font-medium playfair miring-manual">
                        <i class="fab fa-instagram mr-3 text-lg md:text-2xl"></i> @salamjuraganemas
                    </a>
                    <a href="https://wa.me/6285210541006" target="_blank" class="flex items-center text-[#CBA337] hover:text-white transition text-sm md:text-3xl font-medium playfair miring-manual">
                        <i class="fas fa-phone mr-3 text-lg md:text-2xl"></i> 085210541006
                    </a>
                </div>
            </div>
            <div class="mt-12 md:mt-16 pt-8 text-center text-gray-600 text-[9px] md:text-sm border-t border-gray-900 inter uppercase tracking-widest">
                © 2026 Salam Juragan Emas. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('#mobile-menu a').forEach(anchor => {
            anchor.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>

</body>
</html>