function loadComponent(component, targetId) {
  fetch(`layouts/${component}.html`)
    .then(res => res.text())
    .then(html => {
      const tempDiv = document.createElement('div');
      tempDiv.innerHTML = html;
      const template = tempDiv.querySelector('template');
      if (template) {
        document.getElementById(targetId).innerHTML = template.innerHTML;
      } else {
        document.getElementById(targetId).innerHTML = html;
      }
      // Eksekusi semua <script> di komponen
      tempDiv.querySelectorAll('script').forEach(script => {
        const newScript = document.createElement('script');
        if (script.src) newScript.src = script.src;
        else newScript.text = script.textContent;
        document.body.appendChild(newScript);
      });

      // --- Tambahkan ini khusus untuk navbar ---
      if (component === 'navbar') {
        setupNavbarDropdown();
      }
    });
}

function setupNavbarDropdown() {
  // Data dropdown items
  const dropdownItems = {
    sport: [
      { name: "Badminton", href: "#badminton" },
      { name: "Futsal", href: "futsal.html" },
      { name: "Basket", href: "#basket" },
      { name: "Tenis Meja", href: "#tenis-meja" },
      { name: "Voli Pantai", href: "#voli-pantai" }
    ],
    event: [
      { name: "Coming Soon", href: "#coming-soon" },
      { name: "Coming Soon", href: "#coming-soon" },
      { name: "Coming Soon", href: "#coming-soon" }
    ],
    traveling: [
      { name: "Gunung Kerinci", href: "#gunung-kerinci" },
      { name: "Bukit Tinggi", href: "#bukit-tinggi" },
      { name: "Air Terjun Telun", href: "#air-terjun" },
      { name: "Danau Kaco", href: "#danau-kaco" },
      { name: "Trip Camping", href: "#camping" }
    ],
    health: [
      { name: "Yoga Pagi", href: "#yoga" },
      { name: "Sit Up Challenge", href: "#situp" },
      { name: "Senam Sehat", href: "#senam" },
      { name: "Jalan Pagi", href: "#jalan-pagi" },
      { name: "Pola Makan Sehat", href: "#makanan-sehat" }
    ],
    csr: [
      { name: "Berbagi Sembako", href: "#sembako" },
      { name: "Lari Sehat", href: "#lari-sehat" },
      { name: "Kunjungan Panti", href: "#panti" },
      { name: "Donasi Buku", href: "#donasi-buku" },
      { name: "Tanam Pohon", href: "#tanam-pohon" }
    ]
  };

  // Desktop Dropdown
  const dropdown = document.getElementById("dropdown");
  const content = document.getElementById("dropdown-content");
  const navItems = document.querySelectorAll(".nav-item");
  let hideTimeout;

  if (dropdown && content && navItems) {
    navItems.forEach(item => {
      item.addEventListener("mouseenter", function() {
        const section = item.getAttribute("data-section");
        const items = dropdownItems[section];

        content.innerHTML = items.map(i => `
          <a href="${i.href}" class="block px-4 py-3 text-center rounded-lg hover:bg-green-800/30 transition flex items-center justify-center gap-2">
            <span class="w-2 h-2 bg-yellow-300 rounded-full"></span>
            <span class="text-white group-hover:text-yellow-300">${i.name}</span>
          </a>
        `).join("");

        clearTimeout(hideTimeout);
        dropdown.classList.remove("opacity-0", "pointer-events-none");
        dropdown.classList.add("opacity-100");
      });

      item.addEventListener("mouseleave", function() {
        hideDropdownWithDelay();
      });
    });

    dropdown.addEventListener("mouseenter", function() {
      clearTimeout(hideTimeout);
    });

    dropdown.addEventListener("mouseleave", function() {
      hideDropdownWithDelay();
    });

    function hideDropdownWithDelay() {
      hideTimeout = setTimeout(function() {
        dropdown.classList.add("opacity-0", "pointer-events-none");
        dropdown.classList.remove("opacity-100");
      }, 200);
    }
  }

  // Mobile Dropdown
  document.querySelectorAll('.mobile-nav-item').forEach(button => {
    button.addEventListener('click', function() {
      const section = this.getAttribute('data-section');
      const dropdown = document.querySelector(`.mobile-dropdown[data-dropdown="${section}"]`);
      const items = dropdownItems[section];

      document.querySelectorAll('.mobile-dropdown').forEach(el => {
        if (el !== dropdown) el.classList.add('hidden');
      });
      
      if (dropdown) {
        dropdown.classList.toggle('hidden');
        if (dropdown.innerHTML.trim() === "") {
          dropdown.innerHTML = items.map(i => `
            <a href="${i.href}" class="py-1 px-2 text-sm text-white hover:text-yellow-300 transition">${i.name}</a>
          `).join('');
        }
      }
    });
  });

  // Mobile Menu Toggle
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });
  }
}

window.onload = function() {
  loadComponent('navbar', 'navbar-container');
  loadComponent('footer', 'footer-container');
};