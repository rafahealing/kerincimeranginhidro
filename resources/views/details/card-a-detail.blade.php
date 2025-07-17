<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Cerita - PT Kerinci Merangin Hidro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite([])
</head>

<body class="bg-green-50 text-gray-800">
  <!-- Navbar -->
  @include('layouts.navbar')

  <!-- Hero Detail Section with Side Image -->
  <section class="bg-green-800 text-white py-24 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

      <!-- Kiri: Teks -->
      <div class="text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
          Kisah dari Lapangan: Energi untuk Negeri
        </h1>
        <p class="text-lg text-white/90 mb-6">
          Sebuah perjalanan inspiratif tentang bagaimana tim kami membangun energi hijau untuk masa depan.
        </p>

        <a href="{{ route('program') }}"
          class="inline-block px-6 py-2 rounded-full bg-white text-green-800 font-semibold text-sm shadow hover:bg-green-100 hover:shadow-md transition">
          ← Kembali ke Program
        </a>
      </div>


      <!-- Kanan: Gambar -->
      <div class="w-full">
        <img src="/images/kerinci.jpg" alt="Hero Image" class="rounded-xl shadow-lg object-cover w-full max-h-[400px]" />
      </div>

    </div>
  </section>


  <!-- Blog Content -->
  <section class="max-w-5xl mx-auto py-16 px-6">
    <div class="prose max-w-none">
      <h2 class="text-green-700">Pendahuluan</h2>
      <p>Tim dokumentasi kami menyusuri jalur berbatu dan lembah untuk mengabadikan bagaimana infrastruktur energi hijau dibangun. Cerita ini bermula dari antusiasme masyarakat sekitar terhadap proyek PLTA Kerinci.</p>

      <h2 class="text-green-700">Proses dan Tantangan</h2>
      <p>Di tengah cuaca tak menentu dan medan yang menantang, tim harus bekerja ekstra untuk menangkap momen yang merepresentasikan kolaborasi dan semangat warga lokal dalam mendukung proyek ini.</p>

      <h2 class="text-green-700">Dampak Sosial</h2>
      <p>Selain manfaat energi, program ini menghidupkan kembali semangat gotong-royong serta membuka peluang ekonomi bagi masyarakat desa sekitar.</p>
    </div>
  </section>

  <!-- Galeri Foto -->
  <section class="bg-white py-16 px-6">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10 text-green-800">Galeri Dokumentasi</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <img src="/images/kerinci.jpg" alt="Dokumentasi 1"
          class="gallery-img w-full h-64 object-cover rounded-xl shadow-md hover:scale-105 transition duration-300 cursor-pointer" />

        <img src="/images/idn2.jpeg" alt="Dokumentasi 2"
          class="gallery-img w-full h-64 object-cover rounded-xl shadow-md hover:scale-105 transition duration-300 cursor-pointer" />

        <img src="/images/Rafa.png" alt="Dokumentasi 3"
          class="gallery-img w-full h-64 object-cover rounded-xl shadow-md hover:scale-105 transition duration-300 cursor-pointer" />
      </div>
    </div>
  </section>

  <!-- Modal Image Viewer -->
  <div id="imageModal" class="fixed inset-0 z-50 bg-black/90 hidden">
    <div class="w-full h-full flex items-center justify-center">
      <div class="relative flex flex-col items-center px-4">
        <img id="modalImg"
          class="max-h-[80vh] w-auto object-contain rounded-xl shadow-2xl transition-all duration-300" />
        <!-- Tombol Download -->
        <a id="downloadBtn" href="#" download
          class="mt-6 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold text-sm shadow transition">
          ⬇️ Download Gambar
        </a>
      </div>
    </div>
  </div>


  <!-- Footer -->

</body>

<!-- Tombol Kembali Floating -->



<script>
  const galleryImages = document.querySelectorAll(".gallery-img");
  const imageModal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImg");
  const downloadBtn = document.getElementById("downloadBtn");

  // Saat gambar diklik
  galleryImages.forEach(img => {
    img.addEventListener("click", () => {
      modalImg.src = img.src;
      downloadBtn.href = img.src;
      imageModal.classList.remove("hidden");
    });
  });

  // Tutup modal saat klik di luar gambar
  imageModal.addEventListener("click", (e) => {
    // Pastikan klik bukan pada gambar atau tombol
    if (!modalImg.contains(e.target) && !downloadBtn.contains(e.target)) {
      imageModal.classList.add("hidden");
    }
  });

  // Opsional: Escape key untuk tutup
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      imageModal.classList.add("hidden");
    }
  });
</script>





</html>