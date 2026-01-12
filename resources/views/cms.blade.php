<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Harga | Salam Juragan Emas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #0F0F0F; color: white; }
        .bg-gold { background-color: #C5A048; }
        .text-gold { color: #C5A048; }
        .border-gold { border-color: #C5A048; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #C5A048; border-radius: 10px; }

        #sidebar { transition: transform 0.3s ease-in-out; }

        /* LOGIKA RESPONSIVE TABEL */
        @media (max-width: 767px) {
            .responsive-table thead { display: none; } 
            
            .responsive-table, 
            .responsive-table tbody, 
            .responsive-table tr, 
            .responsive-table td {
                display: block;
                width: 100%;
            }

            .responsive-table tr {
                margin-bottom: 1.5rem;
                border: 1px solid #2d2d2d;
                border-radius: 1rem;
                background: #161616;
                padding: 0.5rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.5);
            }

            .responsive-table td {
                display: flex;
                justify-content: space-between; /* Label di kiri, Data di kanan */
                align-items: center;
                text-align: right;
                padding: 0.6rem 1rem !important;
                border-bottom: 1px solid #262626;
            }

            /* BARIS AKSI: Teks di kiri, Tombol di kanan */
            .responsive-table td:last-child {
                border-bottom: none;
                justify-content: space-between; 
                padding-top: 0.8rem !important;
            }

            /* Ukuran tombol kecil di HP */
            .responsive-table td button {
                padding: 4px 12px !important;
                font-size: 10px !important;
                width: auto !important;
                min-width: 80px;
            }

            .responsive-table td::before {
                content: attr(data-label);
                font-weight: 700;
                color: #C5A048;
                text-transform: uppercase;
                font-size: 10px;
                letter-spacing: 1px;
                text-align: left;
            }
        }
    </style>
</head>
<body class="flex h-screen overflow-hidden flex-col md:flex-row">

    <div class="md:hidden bg-[#161616] border-b border-gray-800 p-4 flex items-center justify-between z-50">
        <div class="flex flex-1">
             <img src="{{ asset('logo.png') }}" alt="Logo Salam Juragan Emas" class="h-12 w-auto object-contain">
        </div>
        <button id="mobile-toggle" class="text-gold focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden"></div>

    <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-[#161616] border-r border-gray-800 flex flex-col z-50 transform -translate-x-full md:translate-x-0 md:relative">
        <div class="p-6 hidden md:flex justify-center items-center">
            <img src="{{ asset('logo.png') }}" alt="Logo Salam Juragan Emas" class="h-12 md:h-16 lg:h-20 w-auto object-contain">
        </div>
        <nav class="mt-6 px-4 space-y-2 flex-1">
            <a href="{{ route('cms') }}" class="block py-3 px-4 rounded-lg bg-gold text-black font-bold shadow-lg shadow-gold/20 text-center">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block py-3 px-4 rounded-lg bg-gold text-black font-bold shadow-lg shadow-red/20 w-full mt-2">Logout</button>
            </form>
        </nav>
        <button id="sidebar-close" class="md:hidden p-4 text-gray-500 text-sm">Tutup Menu</button>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <section class="p-4 md:p-8 space-y-10">
            
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-2 h-8 bg-gold rounded-full"></div>
                    <h3 class="text-lg md:text-xl font-bold uppercase tracking-wider">Daftar Harga Emas</h3>
                </div>
                
                <div class="bg-[#161616] rounded-2xl overflow-hidden border border-gray-800 shadow-xl">
                    <table class="w-full text-left responsive-table">
                        <thead class="bg-black/50 text-gray-500 uppercase text-[11px] tracking-widest">
                            <tr>
                                <th class="px-6 py-4">Berat</th>
                                <th class="px-6 py-4">Harga</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            @foreach ($emas as $item)
                                <tr class="hover:bg-white/5 transition">
                                    <td data-label="Berat" class="px-6 py-4 font-bold">{{ $item->berat }}</td>
                                    <td data-label="Harga" class="px-6 py-4 text-gray-300">{{ $item->harga }}</td>
                                    <td data-label="Aksi" class="px-6 py-4 text-center">
                                        <button onclick="openEmas({{ json_encode($item) }})" class="bg-gray-800 hover:bg-gold hover:text-black px-6 py-2 rounded-lg text-xs transition font-bold uppercase tracking-wider">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-2 h-8 bg-gray-500 rounded-full"></div>
                    <h3 class="text-lg md:text-xl font-bold uppercase tracking-wider">Daftar Logam Mulia</h3>
                </div>
                
                <div class="bg-[#161616] rounded-2xl overflow-hidden border border-gray-800 shadow-xl">
                    <table class="w-full text-left responsive-table">
                        <thead class="bg-black/50 text-gray-500 uppercase text-[11px] tracking-widest">
                            <tr>
                                <th class="px-6 py-4">Jenis Logam Mulia</th>
                                <th class="px-6 py-4">Kadar</th>
                                <th class="px-6 py-4">Harga Per Gram</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            @foreach ($logam_mulia as $item)
                                <tr class="hover:bg-white/5 transition">
                                    <td data-label="Jenis" class="px-6 py-4 font-bold">{{ $item->jenis }}</td>
                                    <td data-label="Kadar" class="px-6 py-4"><span class="bg-yellow-900/30 text-yellow-500 text-[10px] px-2 py-1 rounded border border-yellow-800">{{ $item->kadar }}%</span></td>
                                    <td data-label="Harga/Gram" class="px-6 py-4 text-gray-300">{{ $item->harga }}</td>
                                    <td data-label="Aksi" class="px-6 py-4 text-center">
                                        <button onclick="openLogam({{ json_encode($item) }})" class="bg-gray-800 hover:bg-gold hover:text-black px-6 py-2 rounded-lg text-xs transition font-bold uppercase tracking-wider">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </main>

    <div id="modalEditEmas" class="fixed inset-0 z-[60] hidden overflow-y-auto">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm"></div>
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-[#1A1A1A] border border-gold w-full max-w-[350px] rounded-2xl shadow-2xl">
                <div class="p-6 border-b border-gray-800 text-center">
                    <h3 class="text-xl font-bold text-gold uppercase tracking-widest">Edit Produk Emas</h3>
                </div>
                <form id="formEditEmas" method="POST" class="p-6 space-y-5">
                    @csrf @method('PUT')
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1 tracking-tighter">Berat Emas (Gram)</label>
                        <input type="text" name="berat" id="emas_berat" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white outline-none focus:border-gold transition">
                    </div>
                    <div>
                        <label class="block text-xs text-gold uppercase mb-1 font-bold">Harga Saat Ini (Rp)</label>
                        <input type="text" id="emas_harga" inputmode="numeric" oninput="updateRupiah(this, 'emas_real')" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white text-lg outline-none focus:border-white transition">
                        <input type="hidden" name="harga" id="emas_real">
                    </div>
                    <div class="flex space-x-3 pt-2">
                        <button type="button" onclick="closeEmas()" class="flex-1 py-3 text-gray-400 font-bold hover:text-white transition">BATAL</button>
                        <button type="submit" class="flex-1 bg-gold text-black font-bold py-3 rounded-lg hover:bg-yellow-600 transition">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalEditLogam" class="fixed inset-0 z-[60] hidden overflow-y-auto">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm"></div>
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-[#1A1A1A] border border-gray-400 w-full max-w-[350px] rounded-2xl shadow-2xl">
                <div class="p-6 border-b border-gray-800 text-center">
                    <h3 class="text-xl font-bold text-gray-200 uppercase tracking-widest">Edit Logam Mulia</h3>
                </div>
                <form id="formEditLogam" method="POST" class="p-6 space-y-4">
                    @csrf @method('PUT')
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1">Nama Logam Mulia</label>
                        <input type="text" name="brand" id="logam_brand" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white outline-none focus:border-white transition">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1">Kadar</label>
                        <input type="text" name="logam_kadar" id="logam_kadar" oninput="updateKadar(this, 'kadar_real')" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white outline-none focus:border-white transition">
                        <input type="hidden" name="kadar" id="kadar_real">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1">Harga Per Gram (Rp)</label>
                        <input type="text" id="logam_harga" inputmode="numeric" oninput="updateRupiah(this, 'logam_real')" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white text-lg outline-none focus:border-white transition">
                        <input type="hidden" name="harga" id="logam_real">
                    </div>
                    <div class="flex space-x-3 pt-4">
                        <button type="button" onclick="closeLogam()" class="flex-1 py-3 text-gray-400 font-bold hover:text-white transition">BATAL</button>
                        <button type="submit" class="flex-1 bg-white text-black font-bold py-3 rounded-lg hover:bg-gray-200 transition">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const mobileToggle = document.getElementById('mobile-toggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const sidebarClose = document.getElementById('sidebar-close');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        mobileToggle.addEventListener('click', toggleSidebar);
        sidebarOverlay.addEventListener('click', toggleSidebar);
        sidebarClose.addEventListener('click', toggleSidebar);

        function updateRupiah(el, hiddenId) {
            let hiddenInput = document.getElementById(hiddenId);
            let rawValue = el.value.replace(/[^0-9]/g, '');
            if (!rawValue) { el.value = ''; hiddenInput.value = ''; return; }
            hiddenInput.value = rawValue;
            el.value = 'Rp. ' + rawValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function updateKadar(input, hiddenId) {
            let value = input.value.replace(/[^0-9]/g, '');
            if (value.length > 0) {
                let displayValue = value === "100" ? "100" : (value.length > 2 ? value.slice(0, 2) + '.' + value.slice(2) : value);
                document.getElementById(hiddenId).value = displayValue;
                input.value = displayValue + '%';
            }
        }

        function openEmas(data) {
            document.getElementById('modalEditEmas').classList.remove('hidden');
            document.getElementById('formEditEmas').action = '/emas/' + data.id;
            document.getElementById('emas_berat').value = data.berat;
            document.getElementById('emas_harga').value = data.harga;
            document.getElementById('emas_real').value = data.harga;
        }

        function openLogam(data) {
            document.getElementById('modalEditLogam').classList.remove('hidden');
            document.getElementById('formEditLogam').action = '/logam_mulia/' + data.id;
            let kadarRaw = data.kadar.toString().replace('%', '').trim();
            document.getElementById('logam_brand').value = data.jenis;
            document.getElementById('logam_kadar').value = kadarRaw + "%";
            document.getElementById('kadar_real').value = kadarRaw;
            document.getElementById('logam_harga').value = data.harga;
            document.getElementById('logam_real').value = data.harga;
        }

        function closeEmas() { document.getElementById('modalEditEmas').classList.add('hidden'); }
        function closeLogam() { document.getElementById('modalEditLogam').classList.add('hidden'); }
    </script>
</body>
</html>