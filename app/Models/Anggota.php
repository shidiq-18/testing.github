<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $guarded = ['id'];


    public function Kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function Peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
    public function Koleksi(): HasMany
    {
        return $this->hasMany(Koleksi::class);
    }
    public function Ulasan(): HasMany
    {
        return $this->hasMany(Ulasan::class);
    }
    public function Pesanan(): HasMany
    {
        return $this->hasMany(TemplatePinjam::class);
    }
}
