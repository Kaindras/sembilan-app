<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Website Tailwind</title>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- 🔹 Navbar -->
  <header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4">
      <h1 class="text-xl font-bold text-blue-600">Logo</h1>
      <nav class="flex gap-6">
        <a href="#" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="#" class="hover:text-blue-600">Services</a>
        <a href="#" class="hover:text-blue-600">Contact</a>
      </nav>
    </div>
  </header>

  <!-- 🔹 Konten Utama -->
  <main class="container mx-auto p-6">
    <section class="text-center py-12">
      <h2 class="text-3xl font-bold mb-4">Selamat Datang 👋</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Ini adalah contoh layout website sederhana menggunakan Tailwind CSS.
        Kamu bisa menjadikannya template dasar untuk project kamu.
      </p>
      <div class="mt-6">
        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
    </section>

    <!-- 🔹 Card Section -->
    <section class="grid md:grid-cols-3 gap-6 mt-12">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="text-lg font-semibold mb-2">Fitur 1</h3>
        <p class="text-gray-600">Deskripsi singkat fitur pertama.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="text-lg font-semibold mb-2">Fitur 2</h3>
        <p class="text-gray-600">Deskripsi singkat fitur kedua.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="text-lg font-semibold mb-2">Fitur 3</h3>
        <p class="text-gray-600">Deskripsi singkat fitur ketiga.</p>
      </div>
    </section>
  </main>

  <!-- 🔹 Footer -->
  <footer class="bg-gray-800 text-white mt-12">
    <div class="container mx-auto p-6 text-center">
      <p>&copy; 2025 Website Tailwind. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
