@extends('layouts.app')

@section('content')
<div class="container">
    <h1 id="tutorial-bimbel-management-app">Tutorial Bimbel Management App</h1>
    <br>
    <h2 id="untuk-pelajar">Untuk Pelajar</h2>
    <br>
    <h3 id="mengakses-kelas">Mengakses Kelas</h3>
    <p>-Tekan tombol &quot;Kelas&quot; untuk mengakses halaman menu kelas. <br>
    -Pada halaman menu kelas, tekan tombol &quot;Akses Kelas&quot; untuk mengakses halaman kelas.</p>
    <h3 id="mengunduh-materi">Mengunduh Materi</h3>
    <p>-Pada halaman kelas, tekan tombol &quot;Download&quot; untuk mengunduh materi, jika terdapat nama file di sebelah kanan pengumuman.</p>
    <h3 id="mengumpulkan-tugas">Mengumpulkan Tugas</h3>
    <p>-Pada halaman kelas, tekan tombol &quot;Kumpul Tugas&quot; untuk mengakses halaman untuk mengumpul tugas.<br>
    -Pada halaman tersebut, tekan tombol &quot;Choose File&quot;, lalu carikan file tugas yang ingin dikumpulkan dan klik tombol &quot;Open&quot;.<br>
    -Setelah itu isikan nama file tugas di bawah label &quot;Nama File&quot; dan tekan tombol &quot;Submit&quot;.</p>
    <br>
    <h2 id="untuk-pengajar">Untuk Pengajar</h2>
    <br>
    <h3 id="membuat-kelas">Membuat Kelas</h3>
    <p>-Tekan tombol &quot;Kelas&quot; untuk mengakses halaman menu kelas.<br>
    -Pada halaman menu kelas, tekan tombol &quot;Buat Kelas Baru&quot;.<br>
    -Isikan nama kelas, lalu tekan tombol &quot;Submit&quot;.</p>
    <h3 id="mengubah-atau-mengedit-kelas">Mengubah atau Mengedit Kelas</h3>
    <p>-Pada halaman menu kelas, tekan tombol &quot;Edit&quot; pada kelas yang ingin diedit.<br>
    -Isikan nama kelas baru, lalu tekan tombol &quot;Submit&quot;.</p>
    <h3 id="menghapus-kelas">Menghapus Kelas</h3>
    <p>-Pada halaman menu kelas, tekan tombol &quot;Delete&quot; pada kelas yang ingin dihapus.</p>
    <h3 id="mengakses-kelas">Mengakses Kelas</h3>
    <p>-Pada halaman menu kelas, tekan tombol &quot;Akses Kelas&quot; untuk mengakses halaman kelas.</p>
    <h3 id="membuat-pengumuman">Membuat Pengumuman</h3>
    <p>-Setelah mengakses kelas, tekan tombol &quot;Buat Pengumuman Baru&quot;.<br>
    -Isikan deskripsi pengumuman.<br>
    -Untuk mengunggah materi, tekan tombol &quot;Choose File&quot;, lalu carikan file materi yang ingin diunggah dan klik tombol &quot;Open&quot;.<br>
    -Isikan nama file di bawah label &quot;Nama File&quot; dan tekan tombol &quot;Submit&quot;.<br>
    -Jika tidak ingin menggunggah materi, Anda hanya perlu mengisi deskripsi pengumuman dan menekan tombol &quot;Submit&quot;.</p>
    <h3 id="mengubah-atau-mengedit-pengumuman">Mengubah atau Mengedit Pengumuman</h3>
    <p>-Tekan tombol &quot;Edit&quot; pada pengumuman yang ingin diedit.<br>
    -Isikan deskripsi pengumuman.<br>
    -Untuk mengunggah materi, tekan tombol &quot;Choose File&quot;, lalu carikan file materi yang ingin diunggah dan klik tombol &quot;Open&quot;.<br>
    -Isikan nama file di bawah label &quot;Nama File&quot; dan tekan tombol &quot;Submit&quot;.<br>
    -Jika tidak ingin menggunggah materi, Anda hanya perlu mengisi deskripsi pengumuman dan menekan tombol &quot;Submit&quot;.</p>
    <h3 id="menghapus-pengumuman">Menghapus Pengumuman</h3>
    <p>-Tekan tombol &quot;Delete&quot; pada pengumuman yang ingin dihapus.</p>
    <h3 id="melihat-pengumpulan-tugas">Melihat Pengumpulan Tugas</h3>
    <p>-Tekan tombol &quot;Lihat Tugas&quot;.
    -Untuk mengunduh tugas yang telah dikumpulkan, tekan tombol &quot;Download&quot;.</p>
    <h3 id="jika-tidak-dapat-melakukan-langkah-di-atas">Jika Tidak Dapat Melakukan Langkah Di Atas</h3>
    <p>-Silakan mengirim email ke kelvin.andersen5@gmail.com untuk meminta role &quot;admin&quot; supaya dapat melakukan hal-hal seperti membuat, mengedit, atau menghapus kelas atau pengumuman dan melihat tugas.</p>
</div>
@endsection