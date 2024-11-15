<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemplatePinjam extends Model
{
    use HasFactory;
    protected $table = 'TemplatePinjam';
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
