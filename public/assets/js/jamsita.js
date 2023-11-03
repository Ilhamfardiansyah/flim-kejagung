// Fungsi untuk mengisi input waktu dengan waktu saat ini
function isiWaktuOtomatis() {
    var inputWaktu = document.getElementById("jamsita");
    var sekarang = new Date();
    var jam = sekarang.getHours();
    var menit = sekarang.getMinutes();

    // Format jam dan menit ke dalam format "HH:mm"
    var waktuFormat =
        (jam < 10 ? "0" : "") + jam + ":" + (menit < 10 ? "0" : "") + menit;

    // Isi nilai input waktu dengan waktu saat ini
    inputWaktu.value = waktuFormat;
}

// Panggil fungsi saat halaman dimuat
window.onload = isiWaktuOtomatis;
