<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    protected $guarded = [];

    public function faculties(): HasMany
    {
        return $this->hasMany(Faculty::class);
    }
}
