<!-- Navbar -->
<header class="bg-green-900 text-white sticky top-0 z-50 shadow-lg transition-all duration-300 hover:shadow-xl">
  <div class="container mx-auto flex justify-between items-center px-6 py-3">

    <!-- Logo with Animation -->
    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
      <img src="/images/logo.png" alt="Logo" class="w-25 h-10 object-contain transition-transform duration-300 group-hover:scale-110">

    </a>

    <!-- Navigation Menu (centered) -->
    <nav class="hidden md:flex flex-1 justify-center gap-12 text-sm font-medium relative">
      <!-- Sport with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="font-bold hover:text-yellow-300 transition-colors duration-300 flex items-center">
          Sport
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>

        <!-- Dropdown Menu (centered under "Sport") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Badminton
          </a>
          <a href="#futsal" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Futsal
          </a>
          <a href="#basket" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Basket
          </a>
        </div>
      </div>

      <!-- Event with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="font-bold hover:text-yellow-300 transition-colors duration-300 flex items-center">
          Event
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>

        <!-- Dropdown Menu (centered under "Event") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Coming Soon
          </a>
        </div>
      </div>

      <!-- Traveling with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="font-bold hover:text-yellow-300 transition-colors duration-300 flex items-center">
          Traveling
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>

        <!-- Dropdown Menu (centered under "Traveling") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#gunung-kerinci" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Gunung Kerinci
          </a>
          <a href="#bukit-tinggi" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Bukit Tinggi
          </a>
          <a href="#air-terjun" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Air Terjun
          </a>
        </div>
      </div>

      <!-- Health with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="font-bold hover:text-yellow-300 transition-colors duration-300 flex items-center">
          Health
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>

        <!-- Dropdown Menu (centered under "Health") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#yoga" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Yoga
          </a>
          <a href="#situp" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Sit Up
          </a>
          <a href="#senam" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Senam
          </a>
        </div>
      </div>

      <!-- CSR with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="font-bold hover:text-yellow-300 transition-colors duration-300 flex items-center">
          CSR
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>

        <!-- Dropdown Menu (centered under "CSR") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#sembako" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Berbagi Sembako
          </a>
          <a href="#lari-sehat" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Lari Sehat
          </a>
          <a href="#panti" class="block px-4 py-3 hover:bg-yellow-300 transition-colors duration-200 flex items-center">
            Sumbangan Panti
          </a>
        </div>
      </div>
    </nav>



    <!-- Search Box -->
    <div class="hidden md:block relative">
      <form action="https://www.google.com/search" method="GET" target="_blank" class="relative">
        <input type="text" name="q" placeholder="Cari di Kami..."
          class="px-4 py-2 rounded-full text-sm bg-white/90 text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-300 w-48 transition-all duration-300 focus:w-64 shadow-md hover:shadow-lg">
        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-green-800 hover:text-yellow-500 transition-colors duration-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
          </svg>
        </button>
      </form>
    </div>

    <!-- Mobile Toggle -->
    <div class="md:hidden">
      <button id="menuToggle" class="focus:outline-none transition-transform duration-300 hover:scale-110">
        <svg id="menuIcon" class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden bg-green-800/95 backdrop-blur-sm px-6 pb-4 transform origin-top transition-all duration-300 ease-out">
    <nav class="flex flex-col gap-3 text-sm font-medium mb-4">
      <a href="" class="py-2 hover:text-yellow-300 transition-colors duration-300 border-b border-green-700/50 flex items-center">
        <span class="w-2 h-2 bg-yellow-300 rounded-full mr-3"></span>
        Sport
      </a>
      <a href="#aktivitas" class="hover:text-yellow-300 transition">Event</a>
      <a href="#blog" class="hover:text-yellow-300 transition">Traveling</a>
      <a href="#id" class="hover:text-yellow-300 transition">Health</a>
      <a href="#id" class="hover:text-yellow-300 transition">CSR</a>
    </nav>

    <!-- Mobile Search -->
    <form action="" method="GET" class="relative mt-4">
      <input type="text" name="q" placeholder="Cari di Kami..."
        class="w-full px-4 py-2 rounded-full text-sm bg-white/90 text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-300 shadow-md transition-all duration-300">
      <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-green-800 hover:text-yellow-500 transition-colors duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
        </svg>
      </button>
    </form>
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