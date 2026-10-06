<?php
namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();
        $projects = [
            ['judul' => 'Sistem Informasi Akademik', 'deskripsi' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai perkuliahan.', 'tech' => 'Laravel & Bootstrap', 'gambar' => 'project1.jpg', 'status' => 'Selesai'],
            ['judul' => 'E-Commerce SEO Optimization', 'deskripsi' => 'Apliaksi Optimalisasi struktur heading dan indexing halaman web toko online', 'tech' => 'PHP & Google Search Console', 'gambar' => 'project2.jpg', 'status' => 'In Progress'],
            ['judul' => 'Reading Cover & Branding', 'deskripsi' => 'Perancangan element grafis personal branding dan design sampul buku rekayasa web', 'tech' => 'Figma & Canva', 'gambar' => 'project3.jpg', 'status' => 'Selesai'],
            ['judul' => 'Portal Berita Mahasiswa', 'deskripsi' => 'Platform publikasi artikel dan kegiatan kampus berbasis web untuk mahasiswa UNPAM', 'tech' => 'Laravel & Bootstrap', 'gambar' => 'project4.jpg', 'status' => 'In Progress'],
            ['judul' => 'Aplikasi E-Perpustakaan', 'deskripsi' => 'Sistem manajemen peminjaman buku digital dan pengarsipan koleksi perpustakaan', 'tech' => 'CodeIgniter & Bootstrap', 'gambar' => 'project5.jpg', 'status' => 'Selesai'],
            ['judul' => 'Dashboard Landing Page UMKM', 'deskripsi' => 'Pembuatan profil usaha dan katalog produk lokal berbasis web untuk UMKM', 'tech' => 'HTML, CSS, JS & Bootstrap', 'gambar' => 'project6.jpg', 'status' => 'Selesai'],
            ['judul' => 'Sistem Kasir POS', 'deskripsi' => 'Aplikasi point of sales untuk UMKM retail dengan fitur stok dan laporan', 'tech' => 'Laravel & MySQL', 'gambar' => 'project7.jpg', 'status' => 'Selesai'],
            ['judul' => 'Aplikasi Absensi QR', 'deskripsi' => 'Sistem absensi mahasiswa menggunakan QR Code berbasis web', 'tech' => 'Laravel & JavaScript', 'gambar' => 'project8.jpg', 'status' => 'In Progress'],
            ['judul' => 'Company Profile Sekolah', 'deskripsi' => 'Website profil sekolah responsif dengan informasi akademik dan galeri', 'tech' => 'WordPress & Elementor', 'gambar' => 'project9.jpg', 'status' => 'Selesai'],
            ['judul' => 'Manajemen Tugas Akhir', 'deskripsi' => 'Sistem informasi bimbingan, pengajuan judul, dan sidang tugas akhir mahasiswa', 'tech' => 'Laravel & Bootstrap', 'gambar' => 'project10.jpg', 'status' => 'Selesai'],
        ];
        foreach ($projects as $project) { Project::create($project); }
    }
}