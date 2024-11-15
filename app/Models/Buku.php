<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $guarded = ['id'];

    public function kategori_buku(): BelongsTo
    {
        return $this->belongsTo(KategoriBuku::class);
    }

    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
    public function koleksi(): HasMany
    {
        return $this->hasMany(Koleksi::class);
    }
    public function ulasan(): HasMany
    {
        return $this->hasMany(ulasan::class);
    }
    public function pesanan(): HasMany
    {
        return $this->hasMany(TemplatePinjam::class);
    }
}
