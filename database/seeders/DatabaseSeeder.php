<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@rajakurmaindonesia.com',
            'password' => Hash::make('password123'), // GANTI dengan password yang kuat!
        ]);

        // Create sample berita
        Berita::create([
            'judul' => 'Selamat Datang di Raja Kurma Indonesia',
            'slug' => 'selamat-datang-di-raja-kurma-indonesia',
            'konten' => '<p>Kami dengan bangga mempersembahkan produk kurma berkualitas tinggi dari berbagai negara. Raja Kurma Indonesia berkomitmen untuk menyediakan kurma terbaik dengan harga terjangkau untuk keluarga Indonesia.</p><p>Dengan pengalaman bertahun-tahun dalam industri kurma, kami memahami pentingnya kualitas dan kesegaran produk yang kami tawarkan.</p>',
            'status' => 'published',
            'tanggal_publish' => now(),
            'user_id' => $admin->id,
        ]);

        Berita::create([
            'judul' => 'Manfaat Kurma untuk Kesehatan',
            'slug' => 'manfaat-kurma-untuk-kesehatan',
            'konten' => '<p>Kurma kaya akan nutrisi penting seperti serat, potasium, magnesium, dan vitamin B. Konsumsi kurma secara teratur dapat membantu:</p><ul><li>Meningkatkan energi</li><li>Menjaga kesehatan pencernaan</li><li>Menurunkan kolesterol</li><li>Memperkuat tulang</li></ul>',
            'status' => 'published',
            'tanggal_publish' => now()->subDays(2),
            'user_id' => $admin->id,
        ]);

        Berita::create([
            'judul' => 'Tips Memilih Kurma Berkualitas',
            'slug' => 'tips-memilih-kurma-berkualitas',
            'konten' => '<p>Berikut adalah beberapa tips untuk memilih kurma berkualitas:</p><ol><li>Perhatikan tekstur - kurma yang baik memiliki tekstur lembut dan kenyal</li><li>Warna - kurma matang biasanya berwarna gelap dan mengkilap</li><li>Aroma - kurma segar memiliki aroma manis yang khas</li><li>Kemasan - pastikan kemasan tertutup rapat dan tidak rusak</li></ol>',
            'status' => 'published',
            'tanggal_publish' => now()->subDays(5),
            'user_id' => $admin->id,
        ]);

        // Create sample produk
        Produk::create([
            'nama' => 'Kurma Ajwa Premium',
            'slug' => 'kurma-ajwa-premium',
            'deskripsi' => 'Kurma Ajwa dari Madinah yang terkenal dengan khasiatnya yang luar biasa. Memiliki tekstur lembut dan rasa manis yang pas.',
            'kategori' => 'Kurma Premium',
            'harga' => 150000,
            'status' => 'active',
            'urutan' => 1,
        ]);

        Produk::create([
            'nama' => 'Kurma Medjool Jumbo',
            'slug' => 'kurma-medjool-jumbo',
            'deskripsi' => 'Kurma Medjool dengan ukuran jumbo, tekstur super lembut seperti karamel. Sangat cocok untuk hadiah atau konsumsi pribadi.',
            'kategori' => 'Kurma Premium',
            'harga' => 200000,
            'status' => 'active',
            'urutan' => 2,
        ]);

        Produk::create([
            'nama' => 'Kurma Sukari',
            'slug' => 'kurma-sukari',
            'deskripsi' => 'Kurma Sukari dari Arab Saudi dengan rasa manis alami dan tekstur renyah di luar, lembut di dalam.',
            'kategori' => 'Kurma Regular',
            'harga' => 80000,
            'status' => 'active',
            'urutan' => 3,
        ]);

        Produk::create([
            'nama' => 'Kurma Safawi',
            'slug' => 'kurma-safawi',
            'deskripsi' => 'Kurma Safawi hitam legam dengan rasa manis yang kaya. Cocok untuk berbuka puasa dan camilan sehat.',
            'kategori' => 'Kurma Regular',
            'harga' => 75000,
            'status' => 'active',
            'urutan' => 4,
        ]);

        Produk::create([
            'nama' => 'Kurma Mabroom',
            'slug' => 'kurma-mabroom',
            'deskripsi' => 'Kurma Mabroom dengan bentuk lonjong dan warna merah kecoklatan. Memiliki tekstur kenyal dan rasa karamel.',
            'kategori' => 'Kurma Premium',
            'harga' => 120000,
            'status' => 'active',
            'urutan' => 5,
        ]);

        Produk::create([
            'nama' => 'Paket Kurma Ramadan',
            'slug' => 'paket-kurma-ramadan',
            'deskripsi' => 'Paket hemat berisi 3 jenis kurma pilihan untuk menemani ibadah Ramadan Anda. Cocok untuk keluarga besar.',
            'kategori' => 'Paket Hemat',
            'harga' => 250000,
            'status' => 'active',
            'urutan' => 6,
        ]);
    }
}