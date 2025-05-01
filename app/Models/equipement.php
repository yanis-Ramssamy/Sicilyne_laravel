<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Datebase\Eloquent\Relations\BelongsToMany;
class equipement extends Model
{
    use HasFactory;
    public function bateaux(): BelongsToMany
    {
        return $this->belongsToMany(Bateau::class);
    }
}
