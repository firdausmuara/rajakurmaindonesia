<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function index()
    {
        $stats = [
            'total_berita' => Berita::count(),
            'total_produk' => Produk::count(),
            'berita_published' => Berita::where('status', 'published')->count(),
            'produk_active' => Produk::where('status', 'active')->count(),
        ];

        $recentBerita = Berita::with('user')
                             ->latest()
                             ->take(5)
                             ->get();

        $recentProduk = Produk::latest()
                             ->take(5)
                             ->get();

        return view('admin.dashboard', compact('stats', 'recentBerita', 'recentProduk'));
    }
}