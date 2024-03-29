<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $primaryKey = "id";


    protected $fillable = [
        'title',
        'description',
        'slug',
    ];

    public function news(): BelongsToMany
    {
        return $this->belongsToMany (News::class, 'categories_has_news', 'category_id', 'news_id'
        );
    }

    public function newsTp(): HasMany
    {
        return $this->hasMany(NewsTmp::class, 'category_id', 'id');
    }
}

