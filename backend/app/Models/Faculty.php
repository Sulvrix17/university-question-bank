<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    protected $guarded = [];

    public function deparments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
