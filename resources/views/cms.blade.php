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
    </style>
</head>
<body class="flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#161616] border-r border-gray-800 flex-shrink-0 hidden md:flex flex-col">
        <div class="p-6">
            <h1 class="text-xl font-bold tracking-widest text-gold uppercase text-center">Juragan <span class="text-white">Emas</span></h1>
        </div>
        <nav class="mt-6 px-4 space-y-2">
            <a href="{{ route('cms') }}" class="block py-3 px-4 rounded-lg bg-gold text-black font-bold shadow-lg shadow-gold/20 text-center">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block py-3 px-4 rounded-lg bg-gold text-black font-bold shadow-lg shadow-red/20" style="width: 100%">Logout</button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <section class="p-8 space-y-10">
            
            <div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-8 bg-gold rounded-full"></div>
                        <h3 class="text-xl font-bold uppercase tracking-wider">Daftar Harga Emas</h3>
                    </div>
                </div>
                
                <div class="bg-[#161616] rounded-2xl overflow-hidden border border-gray-800 shadow-xl">
                    <table class="w-full text-left">
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
                                    <td class="px-6 py-4 font-bold">{{ $item->berat }}</td>
                                    <td class="px-6 py-4 text-gray-300">{{ $item->harga }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <button onclick="openEmas({{ json_encode($item) }})" class="bg-gray-800 hover:bg-gold hover:text-black px-3 py-1 rounded text-xs transition">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-8 bg-gray-500 rounded-full"></div>
                        <h3 class="text-xl font-bold uppercase tracking-wider">Daftar Logam Mulia</h3>
                    </div>
                </div>
                
                <div class="bg-[#161616] rounded-2xl overflow-hidden border border-gray-800 shadow-xl">
                    <table class="w-full text-left">
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
                                    <td class="px-6 py-4 font-bold">{{ $item->jenis }}</td>
                                    <td class="px-6 py-4"><span class="bg-yellow-900/30 text-yellow-500 text-[10px] px-2 py-1 rounded border border-yellow-800">{{ $item->kadar }}%</span></td>
                                    <td class="px-6 py-4 text-gray-300">{{ $item->harga }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <button onclick="openLogam({{ json_encode($item) }})" class="bg-gray-800 hover:bg-gold hover:text-black px-3 py-1 rounded text-xs transition">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </main>

    <div id="modalEditEmas" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm"></div>
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-[#1A1A1A] border border-gold w-full max-w-sm rounded-2xl shadow-2xl">
                <div class="p-6 border-b border-gray-800">
                    <h3 class="text-xl font-bold text-gold uppercase tracking-widest text-center">Edit Produk Emas</h3>
                </div>
                <form id="formEditEmas" method="POST" class="p-6 space-y-5">
                    @csrf @method('PUT')
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1 tracking-tighter">Berat Emas (Gram)</label>
                        <div class="relative">
                            <input type="text" name="berat" id="emas_berat" placeholder="Contoh: 0.5 atau 10"
                                class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white outline-none focus:border-gold transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs text-gold uppercase mb-1 font-bold">Harga Saat Ini (Rp)</label>
                        <input type="text" id="emas_harga" inputmode="numeric" oninput="updateRupiah(this, 'emas_real')" class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white text-lg outline-none focus:border-white transition">
                        <input type="hidden" name="harga" id="emas_real">
                    </div>
                    <div class="flex space-x-3 pt-2">
                        <button type="button" onclick="closeEmas()" class="flex-1 py-3 text-gray-400 font-bold hover:text-white transition">BATAL</button>
                        <button type="submit" class="flex-1 bg-gold text-black font-bold py-3 rounded-lg hover:bg-yellow-600 shadow-lg shadow-gold/20 transition">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="modalEditLogam" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm"></div>
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-[#1A1A1A] border border-gray-400 w-full max-w-md rounded-2xl shadow-2xl">
                <div class="p-6 border-b border-gray-800">
                    <h3 class="text-xl font-bold text-gray-200 uppercase tracking-widest text-center">Edit Logam Mulia</h3>
                </div>
                <form id="formEditLogam" method="POST" class="p-6 space-y-4">
                    @csrf @method('PUT')
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1">Nama Logam Mulia</label>
                        <input type="text" name="brand" id="logam_brand" placeholder="Contoh: Perak Antam / Platinum"
                            class="w-full bg-black border border-gray-700 rounded-lg px-4 py-2 text-white outline-none focus:border-white transition">
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
                        <button type="submit" class="flex-1 bg-white text-black font-bold py-3 rounded-lg hover:bg-gray-200 transition">UPDATE DATA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function updateRupiah(el, hiddenId) {
            let hiddenInput = document.getElementById(hiddenId);
            
            let rawValue = el.value.replace(/[^0-9]/g, '');

            if (!rawValue) {
                el.value = '';
                hiddenInput.value = '';
                return;
            }

            hiddenInput.value = rawValue;

            let formatted = formatNumberWithDots(rawValue);

            el.value = 'Rp. ' + formatted;
        }

        function updateKadar(input, hiddenId) {
            let value = input.value.replace(/[^0-9]/g, '');
    
            let displayValue = "";

            if (value.length > 0) {
                // 2. LOGIKA FLEKSIBEL:
                // Jika angka tepat "100" (dan panjangnya hanya 3), biarkan jadi 100%
                if (value === "100") {
                    displayValue = "100";
                } 
                // Jika angka lebih dari 2 digit (misal 1005 atau 995)
                // Sisipkan titik setelah dua angka pertama
                else if (value.length > 2) {
                    displayValue = value.slice(0, 2) + '.' + value.slice(2);
                } 
                else {
                    displayValue = value;
                }

                // 3. Batasi maksimal angka agar tidak masuk akal (opsional, misal max 5 digit: 99.999)
                if (value.length > 5) {
                    displayValue = displayValue.substring(0, 6);
                }

                // 4. Update hidden input (nilai murni untuk database: 10.05)
                document.getElementById(hiddenId).value = displayValue;
                
                // 5. Update tampilan (10.05%)
                input.value = displayValue + '%';
            } else {
                input.value = "";
                document.getElementById(hiddenId).value = "";
            }

            // 6. Atur posisi kursor sebelum simbol %
            if (input.value.length > 0) {
                setTimeout(() => {
                    let pos = input.value.length - 1;
                    input.setSelectionRange(pos, pos);
                }, 0);
            }
        }

        function formatNumberWithDots(n) {
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        
        function openEmas(data) {
            document.getElementById('modalEditEmas').classList.remove('hidden');
            document.getElementById('formEditEmas').action = '/emas/' + data.id;
            
            // Set field khusus Emas
            document.getElementById('emas_berat').value = data.berat;
            document.getElementById('emas_harga').value = data.harga;
            document.getElementById('emas_real').value = data.harga;
        }

        function openLogam(data) {
            document.getElementById('modalEditLogam').classList.remove('hidden');
            document.getElementById('formEditLogam').action = '/logam_mulia/' + data.id;
            
            // Set field khusus Logam Mulia
            let kadarRaw = data.kadar.toString().replace('%', '').trim();
            document.getElementById('logam_brand').value = data.jenis; // Nama Logam
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