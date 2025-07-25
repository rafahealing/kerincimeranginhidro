<!-- Footer -->
<footer class="bg-gradient-to-b from-green-900 to-green-950 text-gray-100 py-12 relative overflow-hidden">
  <!-- Animated background elements -->
  <div class="absolute inset-0 z-0 opacity-10">
    <div class="absolute top-0 left-1/4 w-32 h-32 bg-yellow-400 rounded-full filter blur-3xl animate-float1"></div>
    <div class="absolute bottom-10 right-1/3 w-40 h-40 bg-green-500 rounded-full filter blur-3xl animate-float2"></div>
  </div>

  <div class="max-w-7xl mx-auto px-6 md:px-10 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center sm:text-left">

      <!-- Company Info with Animation -->
      <div class="transform transition-all duration-500 hover:scale-[1.02]">
        <h2 class="text-lg md:text-xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-green-300">
          PT Kerinci Merangin Hidro
        </h2>
        <p class="text-sm leading-relaxed text-white/90 hover:text-white transition-colors duration-300">
          Membangun masa depan berkelanjutan melalui energi bersih dan kegiatan sosial yang berdampak.
        </p>

        <!-- Animated Logo Placeholder -->
        <div class="mt-4 flex justify-center sm:justify-start">
          <div>
            <img src="/images/logo.png" alt="Logo" class="w-25 h-10 object-contain transition-transform duration-300 group-hover:scale-110">
          </div>
        </div>
      </div>

      <!-- Navigasi + Kontak + Sosial -->
      <div class="md:col-span-2">
        <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-10 sm:gap-16 text-sm">

          <!-- Navigasi with Hover Effects -->
          <div class="transform transition-all duration-300 hover:-translate-y-1">
            <h3 class="font-semibold mb-4 text-yellow-300 flex items-center justify-center sm:justify-start gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
              </svg>
              Navigasi
            </h3>
            <ul class="space-y-3">
              <li>
                <a href="{{ route('program') }}" class="hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center sm:justify-start gap-2 group">
                  <span class="w-2 h-2 bg-yellow-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                  Sport
                </a>
              </li>
              <li>
                <a href="#program" class="hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center sm:justify-start gap-2 group">
                  <span class="w-2 h-2 bg-yellow-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                  Event
                </a>
              </li>
              <li>
                <a href="#program" class="hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center sm:justify-start gap-2 group">
                  <span class="w-2 h-2 bg-yellow-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                  Traveling
                </a>
              </li>
              <li>
                <a href="#kontak" class="hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center sm:justify-start gap-2 group">
                  <span class="w-2 h-2 bg-yellow-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                  Health
                </a>
              </li>
              <li>
                <a href="#kontak" class="hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center sm:justify-start gap-2 group">
                  <span class="w-2 h-2 bg-yellow-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                  CSR
                </a>
              </li>
            </ul>
          </div>

          <!-- Kontak with Interactive Elements -->
          <div class="transform transition-all duration-300 hover:-translate-y-1">
            <h3 class="font-semibold mb-4 text-yellow-300 flex items-center justify-center sm:justify-start gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Kontak Kami
            </h3>
            <ul class="space-y-3 text-white/90 hover:text-white">
              <li class="flex items-center justify-center sm:justify-start gap-2 group">
                <svg class="w-5 h-5 text-green-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <a href="mailto:Head.office@ptkmh.com" class="hover:text-yellow-300 transition-colors duration-300">
                  Head.office@ptkmh.com
                </a>
              </li>

              <li class="flex items-center justify-center sm:justify-start gap-2 group">
                <svg class="w-5 h-5 text-green-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <a href="tel:+6281234567890" class="hover:text-yellow-300 transition-colors duration-300">
                  +62 812-3456-7890
                </a>
              </li>

              <li class="flex items-start justify-center sm:justify-start gap-2 group">
                <svg class="w-5 h-5 text-green-300 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="hover:text-yellow-300 transition-colors duration-300">
                  Jl. Sungai Penuh - Bangko, Dusun Bedeng Limo, Desa, Batang Merangin, Kerinci Regency, Jambi
                </span>
              </li>
            </ul>
          </div>

          <!-- Media Sosial with Animated Icons -->
          <div class="transform transition-all duration-300 hover:-translate-y-1">
            <h3 class="font-semibold mb-4 text-yellow-300 flex items-center justify-center sm:justify-start gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
              </svg>
              Media Sosial
            </h3>
            <ul class="space-y-4 flex flex-col items-center sm:items-start">
              <li>
                <a href="https://www.linkedin.com/company/kerinci-merangin-hidro" target="_blank" class="flex items-center gap-3 group">
                  <div class="w-10 h-10 bg-blue-600/20 rounded-full flex items-center justify-center group-hover:bg-blue-600/40 transition-all duration-300 group-hover:scale-110">
                    <svg class="w-6 h-6 text-blue-400 group-hover:text-blue-300 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.24 8.24H4.8V24H.24zM7.47 8.24H12V10h.06c.63-1.2 2.2-2.47 4.53-2.47 4.85 0 5.74 3.2 5.74 7.36V24h-4.56v-6.93c0-1.65-.03-3.77-2.3-3.77-2.31 0-2.66 1.8-2.66 3.65V24H7.47z" />
                    </svg>
                  </div>
                  <span class="text-white/90 group-hover:text-blue-300 transition-colors duration-300">
                    linkedin.com/company/kmh
                  </span>
                </a>
              </li>

              <li>
                <a href="https://instagram.com/kerinci.hidro" target="_blank" class="flex items-center gap-3 group">
                  <div class="w-10 h-10 bg-pink-600/20 rounded-full flex items-center justify-center group-hover:bg-pink-600/40 transition-all duration-300 group-hover:scale-110">
                    <svg class="w-6 h-6 text-pink-400 group-hover:text-pink-300 transition-colors duration-300" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path fill="currentColor" d="M224.1 141c-63.6 0-115 51.5-115 115.1s51.5 115.1 115.1 115.1c63.6 0 115.1-51.5 115.1-115.1S287.6 141 224.1 141zm0 190.1c-41.5 0-75.1-33.6-75.1-75.1s33.6-75.1 75.1-75.1 75.1 33.6 75.1 75.1-33.6 75.1-75.1 75.1zm146.4-194.3c0 14.9-12 26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 26.9-26.9 26.9 12 26.9 26.9zm76.1 27.2c-1.7-35.7-9.9-67.3-36.2-93.5S366.5 15.7 330.8 14c-35.7-1.7-142.8-1.7-178.5 0-35.7 1.7-67.3 9.9-93.5 36.2S15.7 145.5 14 181.2c-1.7 35.7-1.7 142.8 0 178.5 1.7 35.7 9.9 67.3 36.2 93.5s57.8 34.5 93.5 36.2c35.7 1.7 142.8 1.7 178.5 0 35.7-1.7 67.3-9.9 93.5-36.2s34.5-57.8 36.2-93.5c1.7-35.7 1.7-142.8 0-178.5zM398.8 388c-7.8 19.6-22.9 34.7-42.5 42.5-29.4 11.7-99.3 9-132.3 9s-102.9 2.6-132.3-9c-19.6-7.8-34.7-22.9-42.5-42.5-11.7-29.4-9-99.3-9-132.3s-2.6-102.9 9-132.3c7.8-19.6 22.9-34.7 42.5-42.5 29.4-11.7 99.3-9 132.3-9s102.9-2.6 132.3 9c19.6 7.8 34.7 22.9 42.5 42.5 11.7 29.4 9 99.3 9 132.3s2.6 102.9-9 132.3z" />
                    </svg>
                  </div>
                  <span class="text-white/90 group-hover:text-pink-300 transition-colors duration-300">
                    @kerinci.hidro
                  </span>
                </a>
              </li>

              <li>
                <a href="https://ptkmh.com" target="_blank" class="flex items-center gap-3 group">
                  <div class="w-10 h-10 bg-green-600/20 rounded-full flex items-center justify-center group-hover:bg-green-600/40 transition-all duration-300 group-hover:scale-110">
                    <svg class="w-6 h-6 text-green-400 group-hover:text-green-300 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                    </svg>
                  </div>
                  <span class="text-white/90 group-hover:text-green-300 transition-colors duration-300">
                    ptkmh.co.id
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom with Wave Effect -->
    <div class="mt-10 border-t border-green-700 pt-6 text-center text-xs text-gray-400">
      &copy; 2025 PT Kerinci Merangin Hidro. All rights reserved.
    </div>
  </div>
</footer>

<style>
  /* Custom animations */
  @keyframes float1 {

    0%,
    100% {
      transform: translateY(0) translateX(0);
    }

    50% {
      transform: translateY(-20px) translateX(10px);
    }
  }

  @keyframes float2 {

    0%,
    100% {
      transform: translateY(0) translateX(0);
    }

    50% {
      transform: translateY(15px) translateX(-15px);
    }
  }

  .animate-float1 {
    animation: float1 8s ease-in-out infinite;
  }

  .animate-float2 {
    animation: float2 10s ease-in-out infinite;
  }

  /* Smooth transitions for all interactive elements */
  a,
  button,
  .transition-all {
    transition: all 0.3s ease;
  }

  /* Hover effects */
  .hover\:scale-105:hover {
    transform: scale(1.05);
  }

  .hover\:-translate-y-1:hover {
    transform: translateY(-4px);
  }
</style>