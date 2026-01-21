<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'kategori',
        'harga',
        'gambar',
        'status',
        'urutan'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    /**
     * Boot method untuk auto-generate slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($produk) {
            if (empty($produk->slug)) {
                $produk->slug = Str::slug($produk->nama);
            }
        });

        static::updating(function ($produk) {
            if ($produk->isDirty('nama') && !$produk->isDirty('slug')) {
                $produk->slug = Str::slug($produk->nama);
            }
        });
    }

    /**
     * Scope untuk produk active
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope untuk urutan
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('urutan', 'asc')
                    ->orderBy('created_at', 'desc');
    }

    /**
     * Scope untuk filter by kategori
     */
    public function scopeByKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

    /**
     * Get formatted harga
     */
    public function getFormattedHargaAttribute()
    {
        if ($this->harga) {
            return 'Rp ' . number_format($this->harga, 0, ',', '.');
        }
        return 'Hubungi Kami';
    }

    /**
     * Get all unique categories
     */
    public static function getAllKategori()
    {
        return self::select('kategori')
                   ->distinct()
                   ->orderBy('kategori')
                   ->pluck('kategori');
    }
}