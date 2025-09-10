// ===============================
// Navbar Dropdown Setup
// ===============================
function setupNavbarDropdown() {
  const dropdownItems = {
    sport: [
      { name: "Badminton", href: "/sport/badminton.html" },
      { name: "Futsal", href: "/sport/futsal.html" },
      { name: "Basket", href: "/sport/basket.html" },
      { name: "Tennis Meja", href: "/sport/tennis-meja.html" },
      { name: "Voli Pantai", href: "/sport/voli.html" },
      { name: "Mobile Legends", href: "/sport/mobile-legends.html" },
    ],
    event: [
      { name: "", href: "#coming-soon" },
      { name: "KMH Event", href: "/event.html" },
      { name: "", href: "#coming-soon" },
    ],
    traveling: [
      { name: "Gunung Kerinci", href: "/traveling/gunung-kerinci.html" },
      { name: "Danau Kaco", href: "/traveling/danau-kaco.html" },
      { name: "Trip Camping", href: "/traveling/camping.html" },
    ],
    health: [
      { name: "Senam Sehat", href: "/health/senam.html" },
      { name: "Jalan Pagi", href: "/health/jalan.html" },
      { name: "Pola Makan Sehat", href: "/health/makan.html" },
    ],
    csr: [
      { name: "Lingkungan dan Kehutanan", href: "/csr/lingkungan.html" },
      { name: "Kewirausahaan", href: "/csr/kewirausahaan.html" },
      { name: "Kesehatan", href: "/csr/kesehatan.html" },
      { name: "Sanitasi & Air Bersih", href: "/csr/sanitasi.html" },
      { name: "Sosial & Mitigasi", href: "/csr/sosial.html" },
      { name: "Pendidikan", href: "/csr/pendidikan.html" },
      { name: "Infrastruktur", href: "/csr/infrastruktur.html" },
      { name: "Keagamaan", href: "/csr/keagamaan.html" },
      { name: "Kepemudaan & Pariwisata", href: "/csr/kepemudaan.html" },
    ],
  };

  const dropdown = document.getElementById("dropdown");
  const content = document.getElementById("dropdown-content");
  const navItems = document.querySelectorAll(".nav-item");
  let hideTimeout;

  if (dropdown && content && navItems) {
    navItems.forEach((item) => {
      item.addEventListener("mouseenter", function () {
        const section = item.getAttribute("data-section");
        const items = dropdownItems[section];

        content.innerHTML = items
          .map(
            (i) => `
          <a href="${i.href}" class="block px-4 py-3 text-center rounded-lg hover:bg-green-800/30 transition flex items-center justify-center gap-2">
            <span class="w-2 h-2 bg-yellow-300 rounded-full"></span>
            <span class="text-white group-hover:text-yellow-300">${i.name}</span>
          </a>
        `
          )
          .join("");

        clearTimeout(hideTimeout);
        dropdown.classList.remove("opacity-0", "pointer-events-none");
        dropdown.classList.add("opacity-100");
      });

      item.addEventListener("mouseleave", hideDropdownWithDelay);
    });

    dropdown.addEventListener("mouseenter", () =>
      clearTimeout(hideTimeout)
    );
    dropdown.addEventListener("mouseleave", hideDropdownWithDelay);

    function hideDropdownWithDelay() {
      hideTimeout = setTimeout(() => {
        dropdown.classList.add("opacity-0", "pointer-events-none");
        dropdown.classList.remove("opacity-100");
      }, 200);
    }
  }

  // Mobile Dropdown
  document.querySelectorAll(".mobile-nav-item").forEach((button) => {
    button.addEventListener("click", function () {
      const section = this.getAttribute("data-section");
      const dropdown = document.querySelector(
        `.mobile-dropdown[data-dropdown="${section}"]`
      );
      const items = dropdownItems[section];

      document.querySelectorAll(".mobile-dropdown").forEach((el) => {
        if (el !== dropdown) el.classList.add("hidden");
      });

      if (dropdown) {
        dropdown.classList.toggle("hidden");
        if (dropdown.innerHTML.trim() === "") {
          dropdown.innerHTML = items
            .map(
              (i) => `
            <a href="${i.href}" class="py-1 px-2 text-sm text-white hover:text-yellow-300 transition">${i.name}</a>
          `
            )
            .join("");
        }
      }
    });
  });

  // Mobile Menu Toggle
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");
  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }
}

// ===============================
// Modal Setup (pakai .active)
// ===============================
document.addEventListener("DOMContentLoaded", () => {
  const triggers = document.querySelectorAll("[id$='ModalTrigger']");
  const modals = document.querySelectorAll(".modal");
  const closeButtons = document.querySelectorAll(".close-btn");

  // buka modal
  triggers.forEach(trigger => {
    trigger.addEventListener("click", e => {
      e.preventDefault();
      const modalId = trigger.id.replace("Trigger", "");
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.add("active");
        document.body.classList.add("modal-open");
      }
    });
  });

  // tutup modal
  closeButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const modalId = btn.getAttribute("data-modal");
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.remove("active");
        document.body.classList.remove("modal-open");
      }
    });
  });

  // klik luar modal
  modals.forEach(modal => {
    modal.addEventListener("click", e => {
      if (e.target === modal) {
        modal.classList.remove("active");
        document.body.classList.remove("modal-open");
      }
    });
  });

  // tombol Escape
  document.addEventListener("keydown", e => {
    if (e.key === "Escape") {
      modals.forEach(modal => {
        if (modal.classList.contains("active")) {
          modal.classList.remove("active");
          document.body.classList.remove("modal-open");
        }
      });
    }
  });
});

// ===============================
// Load Component (Navbar / Footer)
// ===============================
function loadComponent(component, targetId) {
  const isInSubfolder =
    window.location.pathname.includes("/traveling/") ||
    window.location.pathname.includes("/health/") ||
    window.location.pathname.includes("/csr/") ||
    window.location.pathname.includes("/sport/");
  const basePath = isInSubfolder ? "../layouts/" : "./layouts/";

  fetch(basePath + `${component}.html`)
    .then((res) => res.text())
    .then((html) => {
      const tempDiv = document.createElement("div");
      tempDiv.innerHTML = html;

      const template = tempDiv.querySelector("template");
      if (template) {
        document.getElementById(targetId).innerHTML = template.innerHTML;
      } else {
        document.getElementById(targetId).innerHTML = html;
      }

      // Eksekusi semua <script> dalam komponen
      tempDiv.querySelectorAll("script").forEach((script) => {
        const newScript = document.createElement("script");
        if (script.src) newScript.src = script.src;
        else newScript.text = script.textContent;
        document.body.appendChild(newScript);
      });

      // fungsi khusus
      if (component === "navbar") setupNavbarDropdown();
    })
    .catch((err) => console.error("Gagal load component:", component, err));
}

// ===============================
// Initial Load
// ===============================
window.onload = function () {
  loadComponent("navbar", "navbar-container");
  loadComponent("footer", "footer-container");
};
