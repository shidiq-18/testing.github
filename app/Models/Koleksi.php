<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $guarded = ['id'];
    protected $timestamp = false;

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(anggota::class);
    }
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
