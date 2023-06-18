// Mendapatkan referensi ke tombol
const tombol = document.getElementById("tombolId");

// Menambahkan event listener ke tombol
if (tombol) {
  // Tambahkan event listener hanya jika elemen ditemukan
  tombol.addEventListener("click", function () {
    window.location.href = "../user/tambah_diskusi.php";
  });
} else {
  console.log("Elemen tombol tidak ditemukan.");
}

//nav
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".nav");
  if (window.scrollY === 0) {
    navbar.classList.remove("scroll");
  } else {
    navbar.classList.add("scroll");
  }
});

// profil update
const imgDiv = document.querySelector(".profile-pic-div");
const img = document.querySelector("#photo");
const file = document.querySelector("#file");
const uploadBtn = document.querySelector("#uploadBtn");

//if user hover on img div

imgDiv.addEventListener("mouseenter", function () {
  uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener("mouseleave", function () {
  uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener("change", function () {
  //this refers to file
  const choosedFile = this.files[0];

  if (choosedFile) {
    const reader = new FileReader(); //FileReader is a predefined function of JS

    reader.addEventListener("load", function () {
      img.setAttribute("src", reader.result);
    });

    reader.readAsDataURL(choosedFile);
  }
});

//modal
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});

// //sidebarlink
// const sidebarLinks = document.querySelectorAll(".sidebar-link");
// // Fungsi penanganan klik untuk tautan sidebar
// const handleSidebarLinkClick = (event) => {
//   event.preventDefault(); // Mencegah aksi default

//   const targetUrl = event.target.getAttribute("href"); // Dapatkan URL tujuan dari atribut href
//   transitionToPage(targetUrl); // Panggil fungsi transisi halaman
// };

// // Pasang event listener untuk setiap elemen tautan sidebar
// sidebarLinks.forEach((link) => {
//   link.addEventListener("click", handleSidebarLinkClick);
// });
// // Fungsi transisi halaman
// const transitionToPage = (targetUrl) => {
//   // Terapkan efek transisi di sini, misalnya dengan mengubah opacity atau transform

//   // Setelah transisi selesai, arahkan ke halaman baru
//   setTimeout(() => {
//     window.location.href = targetUrl;
//   }, 500); // Ganti nilai 500 dengan durasi transisi yang diinginkan (dalam milidetik)
// };
