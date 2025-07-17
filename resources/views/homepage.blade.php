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
  @vite([])
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
  @include('layouts.navbar')



  <!-- Hero Section with Text on Top and Full Video Below -->
  <section class="relative bg-green-950 text-white py-12">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
      <img src="/images/Rafa.png" alt="Background" class="w-full h-full object-cover opacity-50" />
      <div class="absolute inset-0 bg-green-900/80"></div>
    </div>

    <!-- Konten -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
      <!-- Judul & Deskripsi -->
      <h1 class="text-4xl md:text-7xl font-extrabold mb-4 leading-tight">
        <span class="text-yellow-400">Latest</span>
        <span class="text-green-500">Stories</span>
      </h1>
    </div>

    <!-- Video Carousel Section -->
    <div class="relative z-5 max-w-6xl mx-auto px-6 mt-12">
      <div class="relative overflow-hidden rounded-2xl shadow-lg">

        <!-- Slides -->
        <div id="videoCarousel" class="flex opacity-100 scale-100 transition-all duration-700 ease-in-out">
          <!-- Template Slide -->
          <template id="videoSlideTemplate">
            <div class="w-full flex-shrink-0">
              <video class="w-full h-[400px] md:h-[650px] object-cover" autoplay muted playsinline loop>
                <source src="" type="video/mp4" />
              </video>
            </div>
          </template>
        </div>

        <!-- Dynamic Caption -->
        <div id="videoCaption"
          class="absolute inset-0 flex items-end justify-center pb-12 z-10 pointer-events-none">
          <div
            class="px-6 py-3 bg-gradient-to-r from-yellow-300/90 to-green-400/90 text-green-900 font-bold text-xl md:text-2xl rounded-full shadow-lg opacity-0 transition-opacity duration-700 ease-in-out backdrop-blur-md"
            id="captionText">
            <!-- Caption akan diubah via JS -->
          </div>
        </div>

        <!-- External Prev / Next Buttons -->
        <button id="prevBtn" class="absolute left-10 top-1/2 -translate-y-1/2 -translate-x-full bg-white/70 hover:bg-yellow-300 text-green-900 px-3 py-2 rounded-full shadow z-20">
          ←
        </button>
        <button id="nextBtn" class="absolute right-10 top-1/2 -translate-y-1/2 translate-x-full bg-white/70 hover:bg-yellow-300 text-green-900 px-3 py-2 rounded-full shadow z-20">
          →
        </button>
      </div>
  </section>

  



  <!-- Pendukung Kami -->
  <section id="aktivitas" class="py-9 bg-green-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
      <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- KIRI: Penjelasan -->
        <div class="text-left">
          <h2 class="text-4xl font-bold mb-4">Supported By Our Partners</h2>
          <p class="text-md text-green-100 mb-6 max-w-xl">
            Dukungan dari berbagai perusahaan ternama menjadi bagian penting dari perjalanan keberlanjutan dan inovasi kami. Kolaborasi ini tidak hanya memperkuat infrastruktur, tetapi juga memperluas dampak positif kami ke masyarakat luas.
          </p>
          <a href="#program" class="inline-block mt-2 bg-white text-green-900 px-6 py-3 rounded-lg text-sm font-semibold hover:bg-yellow-300 transition">
            Lihat Kolaborasi →
          </a>
        </div>

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
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36 hover:shadow-xl">
            <img src="/images/Java.png" alt="Java" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36 hover:shadow-xl">
            <img src="/images/Python.png" alt="Python" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36 hover:shadow-xl">
            <img src="/images/GitHub.png" alt="Java" class="h-14 object-contain" />
          </div>
          <div class="bg-white rounded-xl p-4 shadow-md flex items-center justify-center h-28 w-36 hover:shadow-xl">
            <img src="/images/Java.png" alt="Java" class="h-14 object-contain" />
          </div>
        </template>
      </div>
    </div>
  </section>



  <!-- Featured Collection -->
  <section id="program" class="py-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-4xl font-bold mb-12 text-green-800">Featured Event</h2>

      <!-- Grid Cards -->
      <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

        <!-- CARD ITEM -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl">
          <div class="relative">
            <img src="/images/kerinci.jpg" alt="Cerita 1" class="w-full h-64 object-cover transition duration-300 group-hover:brightness-50">
            <!-- Hover Overlay -->
            <div onclick="window.location.href='/halaman-tujuan'" class="cursor-pointer absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
              <span class="text-white bg-green-700/80 px-4 py-2 rounded-full text-sm font-semibold shadow">
                Lihat Selengkapnya
              </span>
            </div>
          </div>
          <div class="mt-4 text-left px-2">
            <h3 class="text-lg font-bold text-green-800 mb-1">Energi dari Lapangan</h3>
            <p class="text-sm text-gray-600">Kisah bagaimana tim bekerja bersama dalam semangat energi terbarukan.</p> </br>
          </div>
        </div>

        <!-- CARD ITEM -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl">
          <div class="relative">
            <img src="/images/idn2.jpeg" alt="Cerita 2" class="w-full h-64 object-cover transition duration-300 group-hover:brightness-50">
            <div onclick="window.location.href='/halaman-tujuan'" class="cursor-pointer absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
              <span class="text-white bg-green-700/80 px-4 py-2 rounded-full text-sm font-semibold shadow">
                Lihat Selengkapnya
              </span>
            </div>
          </div>
          <div class="mt-4 text-left px-2">
            <h3 class="text-lg font-bold text-green-800 mb-1">Momen Sosial Kami</h3>
            <p class="text-sm text-gray-600">Dari kegiatan CSR hingga gotong royong bersama komunitas sekitar.</p> </br>
          </div>
        </div>

        <!-- CARD ITEM -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl">
          <div class="relative">
            <img src="/images/Rafa.png" alt="Cerita 3" class="w-full h-64 object-cover transition duration-300 group-hover:brightness-50">
            <div onclick="window.location.href='/halaman-tujuan'" class="cursor-pointer absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
              <span class="text-white bg-green-700/80 px-4 py-2 rounded-full text-sm font-semibold shadow">
                Lihat Selengkapnya
              </span>
            </div>
          </div>
          <div class="mt-4 text-left px-2">
            <h3 class="text-lg font-bold text-green-800 mb-1">Cerita dari Dalam</h3>
            <p class="text-sm text-gray-600">Refleksi tim dokumentasi dan proses menghadirkan cerita ke publik.</p> </br>
          </div>
        </div>

      </div>
    </div>
  </section>





  <!-- Footer -->
  @include('layouts.footer')

</body>




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
  const videos = [{
      src: "/video/sambal.mp4",
      caption: "#MomentsEnergi — Kebersamaan Lapangan"
    },
    {
      src: "/video/kuah.mp4",
      caption: "#AktivitasTim — Proyek Pagi Hari"
    },
    {
      src: "/video/kentang.mp4",
      caption: "#GreenEnergy — Harmoni dengan Alam"
    },
    {
      src: "/video/kuah.mp4",
      caption: "#SemangatKerja — Di Tengah Hujan"
    },
    {
      src: "/video/sambal.mp4",
      caption: "#Sinergi — Bersama Masyarakat"
    }
  ];

  const carousel = document.getElementById("videoCarousel");
  const template = document.getElementById("videoSlideTemplate");
  const caption = document.getElementById("videoCaption");

  let currentIndex = 0;

  // Render all videos
  videos.forEach(video => {
    const clone = template.content.cloneNode(true);
    clone.querySelector("source").src = video.src;
    carousel.appendChild(clone);
  });

  function updateSlide(index) {
    const slideWidth = carousel.clientWidth;
    carousel.style.transform = `translateX(-${index * slideWidth}px)`;

    const captionText = document.getElementById("captionText");

    // Transisi fade-out
    captionText.classList.remove("opacity-100");
    captionText.classList.add("opacity-0");

    // Update caption setelah delay
    setTimeout(() => {
      captionText.textContent = videos[index].caption;
      captionText.classList.remove("opacity-0");
      captionText.classList.add("opacity-100");
    }, 300);
  }


  // Next / Prev Logic
  document.getElementById("nextBtn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % videos.length;
    updateSlide(currentIndex);
  });

  document.getElementById("prevBtn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + videos.length) % videos.length;
    updateSlide(currentIndex);
  });

  // On Resize (responsive fix)
  window.addEventListener("resize", () => updateSlide(currentIndex));

  // Initial render
  updateSlide(0);

  // Auto-slide setiap 6 detik
  setInterval(() => {
    currentIndex = (currentIndex + 1) % videos.length;
    updateSlide(currentIndex);
  }, 6000);
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const videoSection = document.querySelector("#videoCarousel");

    // Tambahkan kelas animasi
    videoSection.classList.add("opacity-0", "scale-90", "transition-all", "duration-1000");

    // Setelah 100ms, aktifkan animasi masuk
    setTimeout(() => {
      videoSection.classList.remove("opacity-0", "scale-90");
      videoSection.classList.add("opacity-100", "scale-100");
    }, 100);
  });
</script>


</html>