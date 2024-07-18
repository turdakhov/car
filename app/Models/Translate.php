<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Translate extends Model
{
    use HasFactory;

    protected $guarded = [];
    // $translate = Translate::find(1);
    // $category = $translate->category;

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'title_tr');
    }

    public static function langs(): array
    {
        return [
            'ru' => 'Русский',
            'kz' => 'Казахский',
            'en' => 'Английский',
        ];
    }
}
