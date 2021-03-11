<?php


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;


class News extends Model
{
    use HasFactory;

    public function getNews(): Collection
    {
        return DB::table('news')
            //->select("id, title, slug, description, created_at")
            ->get();
    }

    public function getCategory(int $id): array
    {
        return DB::table('news')->find($id);
    }
}
