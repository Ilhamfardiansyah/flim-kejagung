function updateRealTime() {
    const inputWaktu = document.getElementById("waktu");
    const waktuSekarang = new Date();
    const jam = waktuSekarang.getHours().toString().padStart(2, "0");
    const menit = waktuSekarang.getMinutes().toString().padStart(2, "0");
    inputWaktu.value = `${jam}:${menit}`;
}

// Panggil fungsi updateRealTime setiap detik
setInterval(updateRealTime, 1000);

// Panggil fungsi updateRealTime untuk menginisialisasi waktu awal
updateRealTime();
