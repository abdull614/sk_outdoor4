const navbarToggle = document.querySelector(".navbar-toggle");
const navbarMenu = document.querySelector(".navbar-menu");

const previewContainer = document.querySelector(".preview");
const previewBox = document.querySelector(".preview .card");
const previewBack = document.querySelector(".close-button");
const detailButtons = document.querySelectorAll(".btn-detail"); // PERBAIKAN DI SINI

// Toggle navbar
if (navbarToggle && navbarMenu) {
    navbarToggle.addEventListener("click", () => {
        navbarToggle.classList.toggle("active");
        navbarMenu.classList.toggle("active");
    });
}

// Tampilkan preview saat tombol "Detail Produk" diklik
detailButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const harga = parseInt(button.dataset.harga); // Ambil harga dari data-harga
        const formattedHarga = "Rp " + harga.toLocaleString("id-ID") + " /3 Hari"; // Format harga

        document.getElementById("preview-nama").textContent = button.dataset.nama;
        document.getElementById("preview-harga").textContent = formattedHarga;
        document.getElementById("preview-kategori").textContent = button.dataset.kategori;
        document.getElementById("preview-deskripsi").textContent = button.dataset.deskripsi;
        document.getElementById("preview-stok").textContent = button.dataset.stok;
        document.getElementById("preview-gambar").src = button.dataset.gambar;

        if (previewContainer) {
            previewContainer.style.display = "flex";
            document.body.style.overflow = "hidden";
        }
    });
});

// Tutup preview saat ikon X diklik
if (previewBack) {
    previewBack.addEventListener("click", () => {
        if (previewContainer) {
            previewContainer.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });
}

// Fungsi tambahan
const masukkanKeranjang = () => {
    alert("Produk dimasukkan ke keranjang!");
};

const sewaSekarang = () => {
    alert("Anda akan diarahkan ke proses penyewaan.");
};

// tombol kembali
const excludedRoutes = [
    "/profil",
    "/profil-info",
    "/profil-change-password",
    "/profil/notif"
];

const fallbackPage = "/"; // fallback ke beranda jika semua riwayat adalah pengecualian

function goBackSmart() {
    let history = JSON.parse(sessionStorage.getItem("customHistory")) || [];

    // Hapus halaman saat ini
    history.pop();

    while (history.length > 0) {
        const lastPath = history.pop();

        if (!excludedRoutes.includes(lastPath)) {
            sessionStorage.setItem("customHistory", JSON.stringify(history));
            window.location.href = lastPath;
            return;
        }
    }

    // Jika hanya halaman pengecualian yang ada, ke fallback
    window.location.href = fallbackPage;
}

document.addEventListener("DOMContentLoaded", function () {
    const backButton = document.querySelector(".btn-go-back");
    if (backButton) {
        backButton.addEventListener("click", goBackSmart);
    }
});
