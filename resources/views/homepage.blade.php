<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kerinci Hydropower</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      scroll-behavior: smooth;
    }
  </style>
</head>

<style>
  @keyframes scroll-left {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  @keyframes scroll-right {
    0% {
      transform: translateX(-50%);
    }

    100% {
      transform: translateX(0);
    }
  }

  .animate-scroll-left {
    animation: scroll-left 20s linear infinite;
  }

  .animate-scroll-right {
    animation: scroll-right 20s linear infinite;
  }
</style>

<body class="font-sans text-gray-800">
  <!-- Navbar -->
  <header class="bg-green-900 text-white sticky top-0 z-50 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <!-- Logo -->
      <h1 class="text-2xl md:text-3xl font-bold tracking-wide">
        <span class="text-yellow-400">KERINCI</span> Hydropower
      </h1>

      <!-- Navigation Menu -->
      <nav class="hidden md:flex gap-6 text-sm font-medium">
        <a href="#beranda" class="hover:text-yellow-300 transition">Beranda</a>
        <a href="#kategori" class="hover:text-yellow-300 transition">Kategori</a>
        <a href="#aktivitas" class="hover:text-yellow-300 transition">Aktivitas</a>
        <a href="#program" class="hover:text-yellow-300 transition">Program</a>
        <a href="#blog" class="hover:text-yellow-300 transition">Blog</a>
        <a href="#id" class="hover:text-yellow-300 transition">ID</a>
      </nav>

      <!-- Mobile Toggle -->
      <div class="md:hidden">
        <button id="menuToggle" class="focus:outline-none">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden px-6 pb-4">
      <nav class="flex flex-col gap-3 text-sm font-medium">
        <a href="#beranda" class="hover:text-yellow-300 transition">Beranda</a>
        <a href="#kategori" class="hover:text-yellow-300 transition">Kategori</a>
        <a href="#aktivitas" class="hover:text-yellow-300 transition">Aktivitas</a>
        <a href="#program" class="hover:text-yellow-300 transition">Program</a>
        <a href="#blog" class="hover:text-yellow-300 transition">Blog</a>
        <a href="#id" class="hover:text-yellow-300 transition">ID</a>
      </nav>
    </div>
  </header>

  <!-- Toggle Script -->
  <script>
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>



  <!-- Hero Section with Diagonal Split (Text Left + Video Right) -->
  <section class="relative min-h-screen flex items-center justify-center py-20">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
      <img src="/images/Rafa.png" alt="" class="w-full h-full object-cover opacity-60" />
      <div class="absolute inset-0 bg-green-900/80"></div>
    </div>

    <!-- Konten Gabungan -->
    <div class="relative z-10 max-w-7xl mx-auto px-6">
      <div class="bg-green-900/0  p-10 rounded-3xl shadow-2xl grid md:grid-cols-2 gap-12 items-center">

        <!-- KONTEN KIRI -->
        <div>
          <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight">
            Menyalakan Harapan Lewat
            <span class="text-yellow-400">cerita kami</span><br>
            dan <span class="text-green-600">energi hijau</span>
          </h1>

          <p class="text-white mb-6 text-lg">
            Selain kegiatan utama, dokumentasi ini juga menghadirkan momen kebersamaan, kegiatan sosial, dan kolaborasi tim di lapangan.
          </p>

          <!-- Kategori Button -->
          <div class="flex gap-4 mb-6 flex-wrap">
            <button onclick="setContent('kegiatan')" class="kategori-btn px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-semibold hover:bg-yellow-300 transition">
              <svg class="w-4 h-4 text-gray-500 inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14m7-7H5" />
              </svg>
              Kegiatan
            </button>
            <button onclick="setContent('program')" class="kategori-btn px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-semibold hover:bg-yellow-300 transition">
              <svg class="w-4 h-4 text-gray-500 inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z" />
              </svg>
              Program
            </button>
            <button onclick="setContent('cerita')" class="kategori-btn px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-semibold hover:bg-yellow-300 transition">
              <svg class="w-4 h-4 text-gray-500 inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M6 3h12a1 1 0 011 1v16l-7-3-7 3V4a1 1 0 011-1z" />
              </svg>
              Cerita
            </button>
          </div>

          <div class="border-t border-gray-300 mb-6"></div>

          <!-- Konten Dinamis -->
          <div id="kontenInformasi" class="transition-all duration-300">
            <h2 class="text-lg font-semibold text-gray-800 mb-1">Kegiatan Lapangan</h2>
            <p class="text-gray-700 mb-4">
              Dokumentasi tentang bagaimana tim di lapangan bekerja sama membangun energi untuk negeri. Semua terangkum dalam cerita penuh inspirasi.
            </p>
            <a href="#cerita" class="text-yellow-300 font-semibold hover:underline flex items-center gap-1 text-sm">
              Lihat Cerita →
            </a>
          </div>
        </div>

        <!-- VIDEO KANAN -->
        <div class="relative w-full rounded-xl overflow-hidden shadow-lg h-[400px] md:h-[500px]">
          <video id="heroVideo" class="w-full h-full object-cover" autoplay muted playsinline loop></video>
          <div class="absolute inset-0 bg-black/10"></div>
          <div class="absolute bottom-4 left-4 bg-white/80 text-green-600 px-4 py-2 rounded shadow text-base font-semibold">
            #MomentsEnergi — Kebersamaan Lapangan
          </div>
        </div>

      </div>
    </div>
  </section>






  <!-- Tujuan Website -->
  <section id="kategori" class="relative py-28 bg-gradient-to-br from-white to-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

      <!-- Heading -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
          Tujuan Website Kami
        </h2>
        <p class="text-gray-600 text-md max-w-2xl mx-auto">
          Menjadi media transparansi, inspirasi, dan kolaborasi publik bagi PT Kerinci Merangin Hidro.
        </p>
      </div>

      <!-- Content Grid -->
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Gambar -->
        <div class="relative group">
          <img src="/images/idn2.jpeg" alt="Ilustrasi Tujuan" class="rounded-2xl shadow-xl w-full object-cover transition-transform duration-500 group-hover:scale-105" />
          <div class="absolute inset-0 bg-green-900/10 rounded-2xl group-hover:bg-green-900/20 transition"></div>
        </div>

        <!-- Konten -->
        <div>
          <h3 class="text-2xl md:text-3xl font-bold text-green-800 mb-5">Mengapa Website Ini Dibuat?</h3>
          <p class="text-gray-700 leading-relaxed mb-6 text-justify text-base">
            Website ini dirancang sebagai jembatan informasi antara perusahaan dan masyarakat. Mulai dari dokumentasi kegiatan di lapangan, program sosial dan lingkungan, hingga peran aktif perusahaan dalam pembangunan berkelanjutan.
          </p>

          <!-- Bullet Points -->
          <div class="space-y-3">
            <div class="flex items-start gap-3">
              <div class="w-3 h-3 mt-1 bg-green-600 rounded-full"></div>
              <p class="text-sm text-gray-700">Menampilkan aktivitas di luar jam kerja karyawan</p>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-3 h-3 mt-1 bg-green-600 rounded-full"></div>
              <p class="text-sm text-gray-700">Menginspirasi publik lewat cerita dan visual</p>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-3 h-3 mt-1 bg-green-600 rounded-full"></div>
              <p class="text-sm text-gray-700">Meningkatkan transparansi & kolaborasi dengan stakeholder</p>
            </div>
          </div>

          <!-- CTA -->
          <a href="#program" class="inline-block mt-8 bg-green-700 text-white px-6 py-3 rounded-xl text-sm font-semibold hover:bg-green-800 shadow-md transition">
            Jelajahi Cerita Kami
          </a>
        </div>
      </div>
    </div>
  </section>



  <!-- Pendukung Kami -->
  <section id="aktivitas" class="py-24 bg-green-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
      <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- KIRI: Penjelasan -->
        <div class="text-left">
          <h2 class="text-4xl font-bold mb-4">Didukung oleh Mitra Strategis</h2>
          <p class="text-md text-green-100 mb-6 max-w-xl">
            Dukungan dari berbagai perusahaan ternama menjadi bagian penting dari perjalanan keberlanjutan dan inovasi kami. Kolaborasi ini tidak hanya memperkuat infrastruktur, tetapi juga memperluas dampak positif kami ke masyarakat luas.
          </p>
          <a href="#program" class="inline-block mt-2 bg-white text-green-900 px-6 py-3 rounded-lg text-sm font-semibold hover:bg-yellow-300 transition">
            Lihat Kolaborasi →
          </a>
        </div>

        <!-- KANAN: Logo Carousel -->
        <!-- KONTEN LOGO SCROLL -->
        <div class="space-y-6">
          <!-- Baris Pertama: Scroll Kiri ke Kanan -->
          <div class="relative overflow-hidden">
            <div class="animate-scroll-left flex gap-6 w-max">
              <div class="flex gap-6" id="logo-row-1"></div>
              <div class="flex gap-6" id="logo-row-1-duplicate"></div>
            </div>
          </div>

          <!-- Baris Kedua: Scroll Kanan ke Kiri -->
          <div class="relative overflow-hidden">
            <div class="animate-scroll-right flex gap-6 w-max">
              <div class="flex gap-6" id="logo-row-2"></div>
              <div class="flex gap-6" id="logo-row-2-duplicate"></div>
            </div>
          </div>
        </div>

        <!-- TEMPLATE LOGO -->
        <template id="logo-template">
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36">
            <img src="/images/Java.png" alt="Java" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36">
            <img src="/images/Python.png" alt="Python" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36">
            <img src="/images/Java.png" alt="Java" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36">
            <img src="/images/Python.png" alt="Python" class="h-14 object-contain" />
          </div>
        </template>


      </div>
    </div>
  </section>



  <!-- Cerita Kami -->
  <section id="program" class="py-24 bg-white text-center">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-4xl font-bold mb-12 text-gray-800">Cerita di Balik Kegiatan Kami</h2>

      <!-- Wrapper Carousel -->
      <div class="relative overflow-hidden">
        <div id="cardCarousel" class="flex transition-transform duration-1000 ease-in-out">
          <!-- SLIDE 1 -->
          <div class="flex-shrink-0 w-full md:w-[100%] flex justify-center gap-6">
            <!-- Card 1 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/kerinci.jpg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 1</h3>
                <p class="text-sm text-gray-600 mb-3">Deskripsi singkat tentang cerita pertama yang menarik dan menginspirasi.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/idn2.jpeg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 2</h3>
                <p class="text-sm text-gray-600 mb-3">Cerita kedua menyorot kolaborasi tim dalam kegiatan energi hijau.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/kerinci.jpg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 3</h3>
                <p class="text-sm text-gray-600 mb-3">Pengalaman pribadi dari lapangan yang membangun semangat.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
          </div>

          <!-- SLIDE 2 -->
          <div class="flex-shrink-0 w-full md:w-[100%] flex justify-center gap-6">
            <!-- Card 4 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/idn2.jpeg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 4</h3>
                <p class="text-sm text-gray-600 mb-3">Kegiatan sosial yang berdampak langsung pada komunitas lokal.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/kerinci.jpg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 5</h3>
                <p class="text-sm text-gray-600 mb-3">Testimoni karyawan yang merasa terinspirasi dan termotivasi.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/idn2.jpeg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 6</h3>
                <p class="text-sm text-gray-600 mb-3">Perjalanan tim dokumentasi dalam menghadirkan cerita lapangan.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
          </div>

          <!-- SLIDE 3 -->
          <div class="flex-shrink-0 w-full md:w-[100%] flex justify-center gap-6">
            <!-- Card 7 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/kerinci.jpg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 7</h3>
                <p class="text-sm text-gray-600 mb-3">Penerapan teknologi ramah lingkungan dalam kegiatan harian.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 8 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/Rafa.png" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 8</h3>
                <p class="text-sm text-gray-600 mb-3">Sinergi antar departemen untuk mewujudkan keberlanjutan.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
            <!-- Card 9 -->
            <div class="w-full md:w-1/3 border border-gray-300 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-transform hover:scale-[1.02] duration-300">
              <img src="/images/kerinci.jpg" class="w-full h-52 object-cover" />
              <div class="p-6 text-left">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita 9</h3>
                <p class="text-sm text-gray-600 mb-3">Inovasi kecil yang berdampak besar di lapangan operasional.</p>
                <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- Lokasi & Alamat Perusahaan -->
  <!-- Lokasi & Alamat Perusahaan -->
  <section id="blog" class="relative bg-cover bg-center bg-no-repeat py-32 text-white" style="background-image: url('/images/kerinci.jpg');">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <div class="relative max-w-7xl mx-auto px-6 z-10">
      <!-- Heading -->
      <div class="text-center mb-14">
        <h2 class="text-4xl font-bold mb-4">Temukan Lokasi Kami</h2>
        <p class="text-md text-white/80 max-w-xl mx-auto">
          Kunjungi langsung kantor pusat atau lokasi kegiatan PT Kerinci Merangin Hidro yang tersebar di wilayah Jambi.
        </p>
      </div>

      <!-- Kontainer Grid -->
      <div class="grid md:grid-cols-2 gap-10 items-center">
        <!-- MAP -->
        <div class="h-[450px] w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63777.16498206072!2d101.6752968!3d-2.221565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2d9347bcf6137b%3A0x93c065f93c7ecf5b!2sPLTA%20Kerinci%20Merangin%20Hidro!5e0!3m2!1sid!2sid!4v1720570200000!5m2!1sid!2sid"
            class="w-full h-full border-0"
            style="min-height: 100%;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <!-- INFO -->
        <div class="space-y-5 text-white">
          <h3 class="text-2xl font-bold">PT Kerinci Merangin Hidro</h3>
          <p class="text-white/90 text-sm leading-relaxed">
            Jl. Contoh Alamat No. 123<br>
            Kecamatan Kerinci, Kabupaten Merangin<br>
            Provinsi Jambi 37123
          </p>
          <ul class="text-sm space-y-1">
            <li>📧 <span class="font-medium">Email:</span> <a href="mailto:kerinci@gmail.com" class="underline">kerinci@gmail.com</a></li>
            <li>📞 <span class="font-medium">Telepon:</span> <a href="tel:+6281234567890" class="underline">+62 812-3456-7890</a></li>
            <li>🕒 <span class="font-medium">Jam Operasional:</span> Senin – Jumat, 08.00 – 17.00 WIB</li>
          </ul>
          <a href="https://maps.google.com/maps?q=PT%20Kerinci%20Merangin%20Hidro%20Jambi" target="_blank"
            class="inline-block mt-4 bg-white text-green-900 font-semibold px-6 py-2 rounded-lg hover:bg-green-100 transition">
            Buka di Google Maps →
          </a>
        </div>
      </div>
    </div>
  </section>




  <!-- Footer -->
  <footer class="bg-green-950 text-gray-100 py-10">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Company Info -->
        <div>
          <h2 class="text-xl font-bold mb-2">PT Kerinci Merangin Hidro</h2>
          <p class="text-sm leading-relaxed text-gray-300">
            Membangun masa depan berkelanjutan melalui energi bersih dan kegiatan sosial yang berdampak.
          </p>
        </div>

        <!-- Navigation Links -->
        <div>
          <h3 class="text-md font-semibold mb-3 text-green-300">Navigasi</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#beranda" class="hover:underline">Beranda</a></li>
            <li><a href="#aktivitas" class="hover:underline">Aktivitas</a></li>
            <li><a href="#program" class="hover:underline">Program</a></li>
            <li><a href="#kontak" class="hover:underline">Kontak</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-md font-semibold mb-3 text-green-300">Kontak Kami</h3>
          <ul class="space-y-2 text-sm text-gray-300">
            <li>Email: <a href="mailto:kerinci@gmail.com" class="hover:underline">kerinci@gmail.com</a></li>
            <li>Telepon: <a href="tel:+6281234567890" class="hover:underline">+62 812-3456-7890</a></li>
            <li>Alamat: Jl. Contoh No. 123, Jambi</li>
          </ul>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="mt-10 border-t border-green-700 pt-6 text-center text-xs text-gray-400">
        &copy; 2025 PT Kerinci Merangin Hidro. All rights reserved.
      </div>
    </div>
  </footer>

</body>


<!-- Script Konten Dinamis -->
<script>
  const konten = {
    kegiatan: {
      title: "Kegiatan Lapangan",
      text: "Dokumentasi tentang bagaimana tim di lapangan bekerja sama membangun energi untuk negeri. Semua terangkum dalam cerita penuh inspirasi.",
      link: "#cerita",
      video: "/video/sambal.mp4"
    },
    program: {
      title: "Program Sosial & Lingkungan",
      text: "Program-program CSR dari PT KMH untuk masyarakat sekitar, meliputi edukasi, bantuan fasilitas, dan pelestarian alam.",
      link: "#program",
      video: "/video/kuah.mp4"
    },
    cerita: {
      title: "Cerita di Balik Lensa",
      text: "Kisah para tim dokumentasi, cerita lucu dan haru di lapangan yang terekam kamera, jadi inspirasi untuk semua.",
      link: "#cerita",
      video: "/video/kentang.mp4"
    }
  };

  function setContent(kategori) {
    const area = document.getElementById("kontenInformasi");
    const videoEl = document.getElementById("heroVideo");

    // Update text
    area.innerHTML = `
      <h2 class="text-lg font-semibold text-white mb-1">${konten[kategori].title}</h2>
      <p class="text-white mb-4">${konten[kategori].text}</p>
      <a href="${konten[kategori].link}" class="text-yellow-300 font-semibold hover:underline flex items-center gap-1 text-sm">
        Lihat ${konten[kategori].title} →
      </a>
    `;

    // Ganti video
    videoEl.src = konten[kategori].video;
    videoEl.load();
    videoEl.play().catch(err => console.warn("Autoplay blocked:", err));
  }

  // Optional: Set default saat halaman load
  document.addEventListener("DOMContentLoaded", () => setContent("kegiatan"));
</script>


<script>
  function duplicateTemplateContent(templateId, targetId1, targetId2) {
    const template = document.getElementById(templateId);
    const content = template.content.cloneNode(true);
    const duplicate = template.content.cloneNode(true);

    document.getElementById(targetId1).appendChild(content);
    document.getElementById(targetId2).appendChild(duplicate);
  }

  duplicateTemplateContent("logo-template", "logo-row-1", "logo-row-1-duplicate");
  duplicateTemplateContent("logo-template", "logo-row-2", "logo-row-2-duplicate");
</script>

<script>
  const carousel = document.getElementById("cardCarousel");
  const slideCount = 3; // karena ada 3 kelompok slide (masing-masing 3 card)
  let slideIndex = 0;

  setInterval(() => {
    slideIndex = (slideIndex + 1) % slideCount;
    carousel.style.transform = `translateX(-${slideIndex * 100}%)`;
  }, 6000); // 6 detik
</script>








</html>