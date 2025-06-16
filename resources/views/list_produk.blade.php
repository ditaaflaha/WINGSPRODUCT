<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Wings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-gray-900 min-h-screen py-8 px-4 text-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 shadow mb-8">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold text-white">WingsStore</div>
            <ul class="flex gap-6 text-sm text-gray-300 font-medium">
                <li><a href="#" class="hover:text-white">Beranda</a></li>
                <li><a href="#" class="hover:text-white">Tentang</a></li>
                <li><a href="#" class="hover:text-white">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Form Input -->
    <div class="max-w-3xl mx-auto bg-gray-800 shadow-lg rounded-lg p-8 mb-10">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">🛍️ Input Produk</h1>
        <form method="POST" action="{{ route('produk.simpan') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Nama Produk</label>
                <input type="text" name="nama" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white focus:ring-2 focus:ring-gray-500" required>
            </div>
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white focus:ring-2 focus:ring-gray-500" required></textarea>
            </div>
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Harga</label>
                <input type="number" name="harga" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white focus:ring-2 focus:ring-gray-500" required>
            </div>
            <div>
                <button type="submit" class="bg-white text-gray-900 px-5 py-2 rounded hover:bg-gray-200 transition">
                    💾 Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- Tabel Produk -->
    <div class="max-w-5xl mx-auto bg-gray-800 shadow-lg rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-white mb-4">📋 Daftar Produk</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700 text-sm text-gray-200">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">Nama</th>
                        <th class="py-3 px-4">Deskripsi</th>
                        <th class="py-3 px-4">Harga</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($produk as $index => $item)
                    <tr class="hover:bg-gray-700">
                        <td class="py-3 px-4">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">{{ $item->nama }}</td>
                        <td class="py-3 px-4">{{ $item->deskripsi }}</td>
                        <td class="py-3 px-4 text-white font-semibold">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="py-3 px-4">
                            <div class="flex gap-2">
                                <a href="{{ route('produk.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('produk.delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete {{ $item->nama }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                        🗑️ Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} WingsStore. All rights reserved.
    </footer>
</body>
</html>
