<!-- Footer -->
<footer class="bg-green-900 text-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6 md:px-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center sm:text-left">

      <!-- Company Info -->
      <div>
        <h2 class="text-lg md:text-xl font-bold mb-2">PT Kerinci Merangin Hidro</h2>
        <p class="text-sm leading-relaxed text-white">
          Membangun masa depan berkelanjutan melalui energi bersih dan kegiatan sosial yang berdampak.
        </p>
      </div>

      <!-- Navigasi + Kontak + Sosial -->
      <div class="md:col-span-2">
        <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-10 sm:gap-20 text-sm">

          <!-- Navigasi -->
          <div>
            <h3 class="font-semibold mb-3 text-yellow-300">Navigasi</h3>
            <ul class="space-y-2">
              <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
              <li><a href="{{ route('program') }}" class="hover:underline">Sport</a></li>
              <li><a href="#program" class="hover:underline">Event</a></li>
              <li><a href="#kontak" class="hover:underline">Health</a></li>
              <li><a href="#kontak" class="hover:underline">CSR</a></li>
            </ul>
          </div>

          <!-- Kontak -->
          <div>
            <h3 class="font-semibold mb-3 text-yellow-300">Kontak Kami</h3>
            <ul class="space-y-2 text-white">
              <li>Email: <a href="mailto:kerinci@gmail.com" class="hover:underline">Head.office@ptkmh.com</a></li>
              <li>Telepon: <a href="tel:+6281234567890" class="hover:underline">+62 812-3456-7890</a></li>
              <li>Alamat: Jl. Sungai Penuh - Bangko, Dusun Bedeng Limo, Desa, Batang Merangin, Kerinci Regency, Jambi</li>
            </ul>
          </div>

          <!-- Media Sosial -->
          <div>
            <h3 class="font-semibold mb-3 text-yellow-300">Media Sosial</h3>
            <ul class="space-y-3 text-white justify-center flex flex-col items-center sm:items-start">
              <li class="flex items-center gap-2 ">
                <!-- LinkedIn Icon -->
                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.24 8.24H4.8V24H.24zM7.47 8.24H12V10h.06c.63-1.2 2.2-2.47 4.53-2.47 4.85 0 5.74 3.2 5.74 7.36V24h-4.56v-6.93c0-1.65-.03-3.77-2.3-3.77-2.31 0-2.66 1.8-2.66 3.65V24H7.47z" />
                </svg>
                <a href="https://www.linkedin.com/company/kerinci-merangin-hidro" target="_blank" class="hover:underline">
                  linkedin.com/company/kmh
                </a>
              </li>

              <li class="flex items-center gap-2">
                <!-- Instagram Icon -->
                <svg class="w-5 h-5 text-pink-400" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="currentColor"
                    d="M224.1 141c-63.6 0-115 51.5-115 115.1s51.5 115.1 115.1 115.1c63.6 0 115.1-51.5 115.1-115.1S287.6 141 224.1 141zm0 190.1c-41.5 0-75.1-33.6-75.1-75.1s33.6-75.1 75.1-75.1 75.1 33.6 75.1 75.1-33.6 75.1-75.1 75.1zm146.4-194.3c0 14.9-12 26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 26.9-26.9 26.9 12 26.9 26.9zm76.1 27.2c-1.7-35.7-9.9-67.3-36.2-93.5S366.5 15.7 330.8 14c-35.7-1.7-142.8-1.7-178.5 0-35.7 1.7-67.3 9.9-93.5 36.2S15.7 145.5 14 181.2c-1.7 35.7-1.7 142.8 0 178.5 1.7 35.7 9.9 67.3 36.2 93.5s57.8 34.5 93.5 36.2c35.7 1.7 142.8 1.7 178.5 0 35.7-1.7 67.3-9.9 93.5-36.2s34.5-57.8 36.2-93.5c1.7-35.7 1.7-142.8 0-178.5zM398.8 388c-7.8 19.6-22.9 34.7-42.5 42.5-29.4 11.7-99.3 9-132.3 9s-102.9 2.6-132.3-9c-19.6-7.8-34.7-22.9-42.5-42.5-11.7-29.4-9-99.3-9-132.3s-2.6-102.9 9-132.3c7.8-19.6 22.9-34.7 42.5-42.5 29.4-11.7 99.3-9 132.3-9s102.9-2.6 132.3 9c19.6 7.8 34.7 22.9 42.5 42.5 11.7 29.4 9 99.3 9 132.3s2.6 102.9-9 132.3z" />
                </svg>

                <a href="https://instagram.com/kerinci.hidro" target="_blank" class="hover:underline">
                  @kerinci.hidro
                </a>
              </li>

              <li class="flex items-center gap-2">
                <!-- Website Icon -->
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c1.76 0 3.38.57 4.69 1.52l-1.45 1.45A6.978 6.978 0 0012 6c-3.87 0-7 3.13-7 7s3.13 7 7 7 7-3.13 7-7h-2c0 2.76-2.24 5-5 5s-5-2.24-5-5 2.24-5 5-5c1.3 0 2.47.5 3.36 1.32l1.43-1.43C15.4 5.14 13.77 4 12 4zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V9H11z" />
                </svg>

                <a href="https://ptkmh.com" target="_blank" class="hover:underline">
                  ptkmh.co.id
                </a>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="mt-10 border-t border-green-700 pt-6 text-center text-xs text-gray-400">
      &copy; 2025 PT Kerinci Merangin Hidro. All rights reserved.
    </div>
  </div>
</footer>