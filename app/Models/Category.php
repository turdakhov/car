<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function title(): BelongsTo
    {
        return $this->belongsTo(Translate::class, 'title_tr');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function active_cars(): HasMany
    {
        return $this->hasMany(Car::class)->where('is_active', 1);
    }

}
