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

    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
      <!-- Title & Description -->
      <h1 class="text-4xl md:text-7xl font-extrabold mb-4 leading-tight">
        <span class="text-yellow-400 inline-block hover:scale-110 transition-transform duration-300">Latest</span>
        <span class="text-green-500 inline-block hover:scale-110 transition-transform duration-300">Stories</span>
      </h1>
    </div>
    <!-- Video Carousel Section -->
    <div class="relative z-5 max-w-6xl mx-auto px-6 mt-12">
  <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:shadow-2xl">
    
    <!-- Slides Container - Animasi lebih smooth -->
    <div id="videoCarousel" class="flex transition-all duration-500 ease-[cubic-bezier(0.33,0,0.67,1)]">
      <!-- Video slides akan di-inject oleh JS -->
    </div>

    <!-- Caption - Efek muncul lebih natural -->
    <div id="videoCaption" class="absolute inset-0 flex items-end justify-center pb-12 z-10 pointer-events-none">
      <div id="captionText" class="px-6 py-3 bg-gradient-to-r from-yellow-300/90 to-green-400/90 text-green-900 font-bold text-xl md:text-2xl rounded-full shadow-lg opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-out backdrop-blur-sm">
        <!-- Akan diisi lewat JS -->
      </div>
    </div>

    <!-- Navigation - Lebih balanced dan refined -->
    <button id="prevBtn" class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-yellow-300 text-green-900 w-11 h-11 flex items-center justify-center rounded-full shadow-md z-20 transition-all duration-300 hover:scale-110 hover:shadow-lg group">
      <span class="block text-lg group-hover:-translate-x-0.5 transition-transform">←</span>
    </button>
    <button id="nextBtn" class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-yellow-300 text-green-900 w-11 h-11 flex items-center justify-center rounded-full shadow-md z-20 transition-all duration-300 hover:scale-110 hover:shadow-lg group">
      <span class="block text-lg group-hover:translate-x-0.5 transition-transform">→</span>
    </button>
  </div>
</div>

  </section>

  <!-- Template Video Slide -->
  <template id="videoSlideTemplate">
    <div class="w-full flex-shrink-0 relative overflow-hidden group">
      <video class="w-full h-[400px] md:h-[650px] object-cover transform transition-transform duration-1000 ease-out group-hover:scale-105" autoplay muted playsinline loop>
        <source src="" type="video/mp4" />
      </video>
    </div>
  </template>

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
  <section id="program" class="py-7 bg-white text-center">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Animated heading -->
      <h2 class="text-4xl md:text-5xl font-bold mb-12 text-green-800 relative inline-block">
        <span class="relative z-10">Featured Events</span>
        <span class="absolute bottom-0 left-0 w-full h-2 bg-green-200 opacity-70 transform translate-y-1 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
      </h2>

      <!-- Grid Cards -->
      <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

        <!-- CARD ITEM 1 - Enhanced with gradient border -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div class="absolute -right-8 -top-8 w-32 h-32 bg-green-600 opacity-10 group-hover:opacity-20 rounded-full transition duration-700"></div>
          <div class="relative bg-white rounded-xl h-full">
            <div class="relative overflow-hidden rounded-t-xl">
              <img src="/images/kerinci.jpg" alt="Cerita 2"
                class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-105 group-hover:brightness-90">
              <!-- Floating tag -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm text-xs font-bold text-green-800">
                TRAVELING
              </div>
              <!-- Hover Overlay -->
              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 flex justify-center items-center">
                <button onclick="window.location.href='/halaman-tujuan'"
                  class="transform scale-90 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition duration-500 bg-white text-green-800 px-6 py-2 rounded-full font-medium shadow-lg hover:bg-green-800 hover:text-white">
                  View Story
                </button>
              </div>
            </div>
            <div class="p-6 text-left">
            <h3 class="text-xl font-bold text-gray-800 mb-2 relative inline-block">
                <span class="relative z-10 group-hover:text-green-700 transition">Energi dari Lapangan</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-green-200 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></span>
              </h3>
              <p class="text-gray-600 mb-4">Kisah bagaimana tim bekerja bersama dalam semangat energi terbarukan.</p>
              <div class="flex items-center text-xs text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                June 15, 2023
              </div>
            </div>
          </div>
        </div>

        <!-- CARD ITEM 2 - With floating tag -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div class="absolute -right-8 -top-8 w-32 h-32 bg-green-600 opacity-10 group-hover:opacity-20 rounded-full transition duration-700"></div>
          <div class="relative bg-white rounded-xl h-full">
            <div class="relative overflow-hidden rounded-t-xl">
              <img src="/images/idn2.jpeg" alt="Cerita 2"
                class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-105 group-hover:brightness-90">
              <!-- Floating tag -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm text-xs font-bold text-green-800">
                CSR
              </div>
              <!-- Hover Overlay -->
              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 flex justify-center items-center">
                <button onclick="window.location.href='/halaman-tujuan'"
                  class="transform scale-90 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition duration-500 bg-white text-green-800 px-6 py-2 rounded-full font-medium shadow-lg hover:bg-green-800 hover:text-white">
                  View Story
                </button>
              </div>
            </div>
            <div class="p-6 text-left">
            <h3 class="text-xl font-bold text-gray-800 mb-2 relative inline-block">
                <span class="relative z-10 group-hover:text-green-700 transition">Momen Sosial Kami</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-green-200 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></span>
              </h3>
              <p class="text-gray-600 mb-4">Dari kegiatan CSR hingga gotong royong bersama komunitas sekitar.</p>
              <div class="flex items-center text-xs text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                June 15, 2023
              </div>
            </div>
          </div>
        </div>

        <!-- CARD ITEM 3 - With animated underline -->
        <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div class="absolute -right-8 -top-8 w-32 h-32 bg-green-600 opacity-10 group-hover:opacity-20 rounded-full transition duration-700"></div>
          <div class="relative bg-white rounded-xl h-full">
            <div class="relative overflow-hidden rounded-t-xl">
              <img src="/images/Rafa.png" alt="Cerita 2"
                class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-105 group-hover:brightness-90">
              <!-- Floating tag -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm text-xs font-bold text-green-800">
                COMMUNITY
              </div>
              <!-- Hover Overlay -->
              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 flex justify-center items-center">
                <button onclick="window.location.href='/halaman-tujuan'"
                  class="transform scale-90 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition duration-500 bg-white text-green-800 px-6 py-2 rounded-full font-medium shadow-lg hover:bg-green-800 hover:text-white">
                  View Story
                </button>
              </div>
            </div>
            <div class="p-6 text-left">
            <h3 class="text-xl font-bold text-gray-800 mb-2 relative inline-block">
                <span class="relative z-10 group-hover:text-green-700 transition">Cerita dari Dalam</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-green-200 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></span>
              </h3>
              <p class="text-gray-600 mb-4">Refleksi tim dokumentasi dan proses menghadirkan cerita ke publik.</p>
              <div class="flex items-center text-xs text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                June 15, 2023
              </div>
            </div>
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
  document.addEventListener("DOMContentLoaded", () => {
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
    const captionText = document.getElementById("captionText");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let currentIndex = 0;

    // Render Slides
    videos.forEach(video => {
      const slide = template.content.cloneNode(true);
      slide.querySelector("source").src = video.src;
      carousel.appendChild(slide);
    });

    function updateSlide(index) {
      const slideWidth = carousel.clientWidth;
      carousel.style.transform = `translateX(-${index * slideWidth}px)`;

      // Fade out + update + fade in caption
      captionText.classList.remove("opacity-100");
      captionText.classList.add("opacity-0");
      setTimeout(() => {
        captionText.textContent = videos[index].caption;
        captionText.classList.remove("opacity-0");
        captionText.classList.add("opacity-100");
      }, 300);
    }

    // Navigation
    nextBtn.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % videos.length;
      updateSlide(currentIndex);
    });

    prevBtn.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + videos.length) % videos.length;
      updateSlide(currentIndex);
    });

    // Auto Slide
    setInterval(() => {
      currentIndex = (currentIndex + 1) % videos.length;
      updateSlide(currentIndex);
    }, 6000);

    // Responsive Fix
    window.addEventListener("resize", () => updateSlide(currentIndex));

    // Animasi Saat Muncul
    carousel.classList.add("opacity-0", "scale-90", "transition-all", "duration-1000");
    setTimeout(() => {
      carousel.classList.remove("opacity-0", "scale-90");
      carousel.classList.add("opacity-100", "scale-100");
    }, 100);

    // Init
    updateSlide(currentIndex);
  });
</script>




</html>