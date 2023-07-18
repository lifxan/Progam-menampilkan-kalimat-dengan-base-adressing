document.addEventListener("DOMContentLoaded", function() {
  // Ambil elemen dengan ID "sks", "ipk", dan "status"
  var namaElement = document.getElementById("nama");
  var nimElement = document.getElementById("nim");
  var sksElement = document.getElementById("sks");
  var ipkElement = document.getElementById("ipk");
  var statusElement = document.getElementById("status");

  // Contoh data SKS, IPK, dan status mahasiswa
  var nama = "MUHAMMAD ALIF XANDRI";
  var nim = 2200018416;
  var sks = 120;
  var ipk = 3.90;
  var status = "Aktif";

  // Masukkan nilai SKS, IPK, dan status ke dalam elemen HTML
  namaElement.textContent = nama;
  nimElement.textContent = nim;

  // Memeriksa apakah nilai SKS cukup untuk menjadi mahasiswa aktif atau tidak
  if (sks >= 100) {
    sksElement.textContent = sks;
    statusElement.textContent = status;
  } else {
    sksElement.textContent = "Jumlah SKS Kurang";
    statusElement.textContent = "Tidak Aktif";
  }

  // Memeriksa apakah IPK mencapai batas minimal untuk mendapatkan prestasi akademik
  if (ipk >= 3.5) {
    ipkElement.textContent = ipk + " (Prestasi Akademik)";
  } else {
    ipkElement.textContent = ipk;
  }
});
