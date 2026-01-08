<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Salam Juragan Emas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: radial-gradient(circle at center, #1a1a1a 0%, #000000 100%);
        }
        .text-gold { color: #C5A048; }
        .bg-gold { background-color: #C5A048; }
        .border-gold { border-color: #C5A048; }
        .focus-gold:focus { border-color: #C5A048; ring-color: #C5A048; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold tracking-tighter text-white uppercase">
                SALAM <span class="text-gold">JURAGAN EMAS</span>
            </h1>
            <p class="text-gray-400 text-sm mt-2">Silahkan masuk ke panel administrasi</p>
        </div>

        <div class="bg-[#1A1A1A] border border-gray-800 p-8 rounded-2xl shadow-2xl shadow-black/50">
            <form action="{{ route('post-login') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-400 text-xs font-semibold uppercase mb-2">Alamat Email</label>
                    <input type="email" name="email" required class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold transition duration-300" placeholder="admin@juraganemas.com">
                        @error('email')
                            <div class="invalid-feedback ml-3">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="mb-6">
                    <div class="flex justify-between mb-2">
                        <label class="text-gray-400 text-xs font-semibold uppercase">Password</label>
                    </div>
                    <input type="password" name="password" required
                        class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold transition duration-300"
                        placeholder="••••••••">
                </div>

                <button type="submit" 
                    class="w-full bg-gold hover:bg-yellow-600 text-black font-bold py-3 rounded-lg transition duration-300 shadow-lg shadow-gold/20 uppercase tracking-wider">
                    Masuk Sekarang
                </button>
            </form>
        </div>

        <div class="text-center mt-8">
            <a href="/" class="text-gray-500 hover:text-gold text-sm transition transition-all">
                &larr; Kembali ke Beranda Utama
            </a>
        </div>
    </div>

</body>
</html>