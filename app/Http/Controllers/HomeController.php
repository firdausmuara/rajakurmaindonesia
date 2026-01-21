<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display landing page
     */
    public function index()
    {
        $produk = Produk::active()->ordered()->take(8)->get();
        $berita = Berita::published()->latest()->take(6)->get();
        
        return view('landing.index', compact('produk', 'berita'));
    }

    /**
     * Display all berita
     */
    public function berita()
    {
        $berita = Berita::published()->latest()->paginate(9);
        
        return view('landing.berita', compact('berita'));
    }

    /**
     * Display single berita
     */
    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug', $slug)
                       ->published()
                       ->firstOrFail();
        
        // Increment views
        $berita->incrementViews();
        
        // Get related berita
        $relatedBerita = Berita::published()
                              ->where('id', '!=', $berita->id)
                              ->latest()
                              ->take(3)
                              ->get();
        
        return view('landing.berita-detail', compact('berita', 'relatedBerita'));
    }

    /**
     * Display all produk
     */
    public function produk(Request $request)
    {
        $query = Produk::active()->ordered();
        
        // Filter by kategori if provided
        if ($request->has('kategori') && $request->kategori != '') {
            $query->byKategori($request->kategori);
        }
        
        $produk = $query->paginate(12);
        $kategoriList = Produk::getAllKategori();
        
        return view('landing.produk', compact('produk', 'kategoriList'));
    }

    /**
     * Display single produk
     */
    public function produkDetail($slug)
    {
        $produk = Produk::where('slug', $slug)
                       ->active()
                       ->firstOrFail();
        
        // Get related produk
        $relatedProduk = Produk::active()
                              ->where('kategori', $produk->kategori)
                              ->where('id', '!=', $produk->id)
                              ->ordered()
                              ->take(3)
                              ->get();
        
        return view('landing.produk-detail', compact('produk', 'relatedProduk'));
    }
}