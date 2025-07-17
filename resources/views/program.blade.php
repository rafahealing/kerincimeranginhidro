<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Program</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite([])
</head>

<body class="bg-yellow-100">

  <!-- Navbar -->
  @include('layouts.navbar')

  <!-- Hero Section -->
  <section class="bg-green-800 text-white py-24 text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight drop-shadow">
        Program & Cerita Inspiratif Kami
      </h1>
      <p class="text-lg text-white/90 max-w-2xl mx-auto">
        Jelajahi kisah nyata dari lapangan hingga ke program sosial. Setiap cerita adalah bagian dari energi masa depan.
      </p>
    </div>
  </section>


  <!-- Filter Buttons -->
  <section class="pt-10 pb-6">
    <div class="flex justify-center flex-wrap gap-4 px-4">
      <!-- Semua -->
      <button onclick="filterCards('Semua', this)"
        class="filter-btn px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 bg-white text-gray-700 border border-green-800 shadow-lg hover:scale-95 transition active:scale-90">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        Semua
      </button>

      <!-- Program -->
      <button onclick="filterCards('Program', this)"
        class="filter-btn px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 bg-white text-gray-700 border border-green-800 shadow-lg hover:scale-95 transition active:scale-90">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 17v-6h13v6M9 17H4V7h13v10H9z" />
        </svg>
        #Program
      </button>

      <!-- Cerita -->
      <button onclick="filterCards('Cerita', this)"
        class="filter-btn px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 bg-white text-gray-700 border border-green-800 shadow-lg hover:scale-95 transition active:scale-90">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M7 8h10M7 12h6m-6 4h4m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        #Cerita
      </button>

      <!-- Kegiatan -->
      <button onclick="filterCards('Kegiatan', this)"
        class="filter-btn px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 bg-white text-gray-700 border border-green-800 shadow-lg hover:scale-95 transition active:scale-90">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
        </svg>
        #Kegiatan
      </button>
    </div>
  </section>






  <!-- Card Grid -->
  <section class="pb-24">
    <div class="max-w-7xl mx-auto px-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Cerita">
        <img src="/images/kerinci.jpg" alt="Cerita" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Kisah dari Lapangan</h3>
          <p class="text-sm text-gray-600 mb-3">Cerita inspiratif tentang perjuangan tim dokumentasi di tengah pembangunan energi bersih.</p>
          <a href="{{ route('details/card-a-detail') }}" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Program">
        <img src="/images/idn2.jpeg" alt="Program Komunitas" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Program Komunitas</h3>
          <p class="text-sm text-gray-600 mb-3">Inisiatif yang digerakkan bersama masyarakat sekitar demi keberlanjutan lingkungan.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Cerita">
        <img src="/images/kerinci.jpg" alt="Pelatihan Energi" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Pelatihan Energi</h3>
          <p class="text-sm text-gray-600 mb-3">Kegiatan edukatif yang mengenalkan generasi muda pada energi baru dan terbarukan.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Program">
        <img src="/images/idn2.jpeg" alt="Bersih Sungai" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Aksi Bersih Sungai</h3>
          <p class="text-sm text-gray-600 mb-3">Kegiatan gotong-royong untuk menjaga kebersihan dan kelestarian aliran sungai sekitar proyek.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Kegiatan">
        <img src="/images/Rafa.png" alt="Penanaman Pohon" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Penanaman Pohon</h3>
          <p class="text-sm text-gray-600 mb-3">Menanam ribuan bibit pohon sebagai upaya reboisasi dan penguatan ekosistem lokal.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Cerita">
        <img src="/images/kerinci.jpg" alt="Sosialisasi PLTA" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Sosialisasi PLTA</h3>
          <p class="text-sm text-gray-600 mb-3">Meningkatkan pemahaman masyarakat akan manfaat dan cara kerja PLTA di daerah mereka.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Program">
        <img src="/images/idn2.jpeg" alt="Cerita Relawan" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Cerita Relawan</h3>
          <p class="text-sm text-gray-600 mb-3">Pengalaman para relawan dalam mendampingi kegiatan sosial dan pelatihan masyarakat desa.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Kegiatan">
        <img src="/images/Rafa.png" alt="Inovasi Lokal" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Inovasi Energi Lokal</h3>
          <p class="text-sm text-gray-600 mb-3">Mengangkat cerita warga yang menciptakan solusi energi sederhana di lingkungannya.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Program">
        <img src="/images/idn2.jpeg" alt="Kampanye Sekolah Hijau" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Sekolah Hijau</h3>
          <p class="text-sm text-gray-600 mb-3">Kolaborasi dengan sekolah-sekolah dalam kampanye lingkungan hidup sejak dini.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Cerita">
        <img src="/images/kerinci.jpg" alt="Energi & UMKM" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Energi untuk UMKM</h3>
          <p class="text-sm text-gray-600 mb-3">Mendukung UMKM lokal dengan pemanfaatan listrik ramah lingkungan dan pelatihan digital.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 11 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Program">
        <img src="/images/idn2.jpeg" alt="Ekspedisi Edukasi" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Ekspedisi Edukasi</h3>
          <p class="text-sm text-gray-600 mb-3">Tim kami menyambangi desa-desa terpencil untuk menyebarkan edukasi energi ramah lingkungan.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>

      <!-- Card 12 -->
      <div class="card-item bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group" data-kategori="Kegiatan">
        <img src="/images/Rafa.png" alt="Green Culture" class="h-52 w-full object-cover group-hover:scale-105 transition duration-300" />
        <div class="p-5">
          <h3 class="text-lg font-semibold text-green-800 mb-2">Budaya Hijau</h3>
          <p class="text-sm text-gray-600 mb-3">Mendorong gaya hidup hijau di lingkungan kerja dan rumah melalui berbagai aktivitas komunitas.</p>
          <a href="#" class="text-green-600 text-sm font-medium hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

  

  <!-- Filter Button Style -->
  <style>
    .filter-btn {
      @apply px-6 py-2 rounded-lg bg-gradient-to-br from-white to-gray-100 text-gray-700 border border-gray-300 shadow-sm hover:shadow-md hover:bg-green-100 hover:text-green-800 font-semibold transition duration-300 text-sm;
    }

    .filter-btn.active {
      @apply bg-green-700 text-white shadow-lg border-green-800;
    }

    .filter-btn:active {
      transform: scale(0.96);
    }
  </style>

  <script>
    function filterCards(kategori) {
      // Hapus semua 'active'
      document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));

      // Tambahkan 'active' ke tombol yang diklik
      const clickedBtn = [...document.querySelectorAll('.filter-btn')].find(btn => btn.textContent.includes(kategori) || kategori === "Semua");
      if (clickedBtn) clickedBtn.classList.add('active');

      // Filter kartu
      document.querySelectorAll('.card-item').forEach(card => {
        const cardKategori = card.getAttribute('data-kategori');
        if (kategori === "Semua" || cardKategori === kategori) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    }
  </script>

<script>
  function filterCards(kategori, clickedBtn) {
    // Aktifkan tombol filter
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.classList.remove('bg-green-700', 'text-white', 'border-green-800');
      btn.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
    });

    clickedBtn.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');
    clickedBtn.classList.add('bg-green-700', 'text-white', 'border-green-800');

    // Tampilkan atau sembunyikan kartu
    document.querySelectorAll('.card-item').forEach(card => {
      const cardKategori = card.getAttribute('data-kategori');
      if (kategori === "Semua" || cardKategori === kategori) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  }
</script>




</body>

</html>