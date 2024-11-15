<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class user extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function peminjaman(): HasMany
    {
        return $this->hasMany(peminjaman::class);
    }
}
