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

    protected $table = "news";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'description',
        'status'
    ];
}
