// Mendapatkan referensi ke tombol
var tombol = document.getElementById("tombolId");

// Menambahkan event listener ke tombol
tombol.addEventListener("click", function () {
  // Mengarahkan ke halaman sesuatu
  window.location.href = "tambah_diskusi.php";
});

//nav
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".nav");
  if (window.scrollY === 0) {
    navbar.classList.remove("scroll");
  } else {
    navbar.classList.add("scroll");
  }
});

//modal
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});
