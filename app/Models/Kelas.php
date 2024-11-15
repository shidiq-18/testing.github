<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamp = false;

    public function anggota(): HasMany
    {
        return $this->hasMany(Anggota::class);
    }
}
