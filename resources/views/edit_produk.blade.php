<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-gray-900 min-h-screen py-8 px-4 text-gray-100">

    <div class="max-w-3xl mx-auto bg-gray-800 shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">✏️ Edit Produk</h1>
        <form method="POST" action="{{ route('produk.update', $produk->id) }}" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Nama Produk</label>
                <input type="text" name="nama" value="{{ old('nama', $produk->nama) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white" required>
            </div>
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
            </div>
            <div>
                <label class="block text-gray-300 font-semibold mb-1">Harga</label>
                <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}" class="w-full px-4 py-2 bg-gray-900 border border-gray-600 rounded text-white" required>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('produk.list') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                    ← Batal
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded">
                    💾 Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</body>
</html>
