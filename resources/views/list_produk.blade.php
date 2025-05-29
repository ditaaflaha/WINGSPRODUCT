<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wings Market</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold text-blue-600">WingsStore</div>
            <ul class="flex gap-6 text-sm text-gray-600 font-medium">
                <li><a href="#" class="hover:text-blue-600">Beranda</a></li>
                <li><a href="#" class="hover:text-blue-600">Tentang</a></li>
                <li><a href="#" class="hover:text-blue-600">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-blue-100 py-16 px-6 text-center">
        <h1 class="text-4xl font-extrabold text-blue-800 mb-4">Temukan Produk Wings yang Halal dan Etis</h1>
        <p class="text-lg text-blue-700">Dukung brand yang mendukung Palestina 🇵🇸</p>
    </section>

    <!-- Produk Tabel -->
    <main class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-gray-700 mb-10 text-center">📋 Daftar Produk Wings</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-xl shadow text-sm">
                <thead class="bg-gray-100 text-gray-600 font-semibold text-left">
                    <tr>
                        <th class="px-6 py-4">No</th>
                        <th class="px-6 py-4">Nama Produk</th>
                        <th class="px-6 py-4">Deskripsi</th>
                        <th class="px-6 py-4">Harga</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-800">
                    @foreach ($nama as $index => $item)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium">{{ $item }}</td>
                        <td class="px-6 py-4">{{ $desc[$index] }}</td>
                        <td class="px-6 py-4 text-blue-600 font-semibold">Rp{{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} WingsStore. All rights reserved.
    </footer>

</body>
</html>
