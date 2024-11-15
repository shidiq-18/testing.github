<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function buku():BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
    public function anggota():BelongsTo
    {
        return $this->belongsTo(anggota::class);
    }
}
