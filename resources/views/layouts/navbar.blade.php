<!-- Navbar -->
<header class="bg-green-900 text-white sticky top-0 z-50 shadow-md">
  <div class="container mx-auto flex justify-between items-center px-6 py-4">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2">
      <img src="/images/logo.png" alt="Logo" class="w-25 h-10 object-contain">
    </a>

    <!-- Navigation Menu (centered) -->
    <nav class="hidden md:flex flex-1 justify-center gap-12 text-sm font-medium relative">
      <!-- Sport with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class=" cursor-pointer font-bold hover:text-yellow-300 transition">Sport</span>

        <!-- Dropdown Menu (centered under "Sport") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-2 hover:bg-yellow-100">Badminton</a>
          <a href="#futsal" class="block px-4 py-2 hover:bg-yellow-100">Futsal</a>
          <a href="#basket" class="block px-4 py-2 hover:bg-yellow-100">Basket</a>
        </div>
      </div>

      <!-- Event with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="cursor-pointer font-bold hover:text-yellow-300 transition">Event</span>

        <!-- Dropdown Menu (centered under "Event") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-2 hover:bg-yellow-100">Coming Soon</a>
        </div>
      </div>

      <!-- Traveling with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="cursor-pointer font-bold hover:text-yellow-300 transition">Traveling</span>

        <!-- Dropdown Menu (centered under "Traveling") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-2 hover:bg-yellow-100">Gunung kerinci</a>
          <a href="#futsal" class="block px-4 py-2 hover:bg-yellow-100">Bukit padang</a>
          <a href="#basket" class="block px-4 py-2 hover:bg-yellow-100">Air terjun</a>
        </div>
      </div>

      <!-- Health with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="cursor-pointer font-bold hover:text-yellow-300 transition">Health</span>

        <!-- Dropdown Menu (centered under "Health") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-30 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-2 hover:bg-yellow-100">Yoga</a>
          <a href="#futsal" class="block px-4 py-2 hover:bg-yellow-100">Sit up</a>
          <a href="#basket" class="block px-4 py-2 hover:bg-yellow-100">Napas</a>
        </div>
      </div>

      <!-- CSR with Dropdown (Unclickable + Hoverable Area) -->
      <div class="group relative py-2">
        <span class="cursor-pointer font-bold hover:text-yellow-300 transition">CSR</span>

        <!-- Dropdown Menu (centered under "CSR") -->
        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white text-gray-800 shadow-lg rounded-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:visible invisible transform transition-all duration-200 origin-top z-50">
          <a href="#badminton" class="block px-4 py-2 hover:bg-yellow-100">Berbagi sembako</a>
          <a href="#futsal" class="block px-4 py-2 hover:bg-yellow-100">Lari sehat</a>
          <a href="#basket" class="block px-4 py-2 hover:bg-yellow-100">Sumbangan panti</a>
        </div>
      </div>
    </nav>



    <!-- Search Box -->
    <div class="hidden md:block">
      <form action="https://www.google.com/search" method="GET" target="_blank" class="relative">
        <input type="text" name="q" placeholder="Cari di Kami..." class="px-3 py-1.5 rounded-full text-sm bg-white text-gray-800 focus:outline-none focus:ring focus:ring-yellow-300">
        <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 text-green-800 hover:text-yellow-500">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
          </svg>
        </button>
      </form>

    </div>

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
    <nav class="flex flex-col gap-3 text-sm font-medium mb-4">
      <a href="{{ route('home') }}" class="hover:text-yellow-300 transition">Beranda</a>
      <a href="{{ route('program') }}" class="hover:text-yellow-300 transition">Sport</a>
      <a href="#aktivitas" class="hover:text-yellow-300 transition">Event</a>
      <a href="#blog" class="hover:text-yellow-300 transition">Traveling</a>
      <a href="#id" class="hover:text-yellow-300 transition">Health</a>
      <a href="#id" class="hover:text-yellow-300 transition">CSR</a>
    </nav>

    <!-- Mobile Search -->
    <form action="" method="GET" class="relative">
      <input type="text" name="q" placeholder="Cari di Kami..." class="w-full px-3 py-2 rounded-full text-sm bg-white text-gray-800 focus:outline-none focus:ring focus:ring-yellow-300">
      <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-green-800 hover:text-yellow-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
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