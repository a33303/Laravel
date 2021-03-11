<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function getCategories(): Collection
    {
        return DB::table('categories')
            //->select("id, title, slug, description, created_at")
            ->get();
    }

    public function getCategory(int $id): array
    {
        return DB::table('categories')->find($id);
    }
}
