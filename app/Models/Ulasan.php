<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';
    protected $guarded = ['id'];

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(anggota::class);
    }
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
