function autoResize(textarea) {
  // Simpan tinggi awal dalam variabel
  const initialHeight = '';

  // Atur tinggi textarea berdasarkan scrollHeight jika ada teks
  if (textarea.value.trim() !== '') {
    textarea.style.height = 'auto'; // Set tinggi auto
    textarea.style.height = (textarea.scrollHeight) + 'px'; // Atur tinggi berdasarkan scrollHeight
  } else {
    textarea.style.height = initialHeight; // Kembali ke tinggi awal jika teks dihapus semua
  }
}

// Panggil autoResize sekali saat halaman dimuat untuk menyesuaikan tinggi awal
document.addEventListener('DOMContentLoaded', function () {
  autoResize(document.getElementById('myTextarea'));
});