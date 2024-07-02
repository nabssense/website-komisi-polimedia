function goBack() {
    window.history.back();
}
function goBackReload() {
  window.history.back();
  window.location.reload(true);  // Merefresh halaman setelah navigasi mundur
}
// NAVBAR atau MENU UTAMA
function pageBeranda() {
  window.location.href = "/beranda";
}
function pageBerita() {
  window.location.href = "/berita";
}
function pageForumDiskusi() {
  window.location.href = "/forum-diskusi";
}
function pageTentangKomisi() {
  window.location.href = "/tentang-komisi";
}
function pageTentangKabinet() {
  window.location.href = "/tentang-kabinet";
}




// Forum

function pageForumDiskusiPertanyaan() {
 location.href= "'{{ route('forum-diskusi.diskusi.kategori.show', $discussion->slug) }}'";
}
function pageForumDiskusiAjukanPertanyaan() {
  window.location.href = '/forum-diskusi/create';
}


// Auth Login
function pageMasuk() {
  window.location.href = "/masuk-akun";
}
function pageDaftar() {
  window.location.href = "/daftar-akun";
}

// Notifikasi
function pageNotifikasi() {
  window.location.href = "/notifikasi";
}

// Akun
function pageUserProfile() {
  window.location.href = "/user-profile";
}
function pageUser() {
  window.location.href = "/user";
}




// Kelola Website
function pageKelolaWebsite() {
  window.location.href = "kelola-website";
}

// Kelola Kabinet
function pageKelolaKabinet() {
  window.location.href = "/kelola-kabinet";
}
function pageKelolaKabinetTambah() {
  window.location.href = "/kelola-kabinet-tambah";
}

// Kelola Akun
function pageKelolaAkun() {
  window.location.href = "/kelola-akun";
}
function pageKelolaAkunTambah() {
  window.location.href = "/kelola-akun-tambah";
}


// Kelola Berita
function pageKelolaBerita() {
  window.location.href = "/kelola-berita";
}
function pageKelolaBeritaTambah() {
  window.location.href = "/kelola-berita-tambah";
}
// 
function pageUbahKomisi() {
  window.location.href = "/kelola-komisi-ubah";
}

// Kelola Pengajuan
function pageKelolaPengajuanPencairan() {
  window.location.href = "/kelola-pengajuan-pencairan";
}
