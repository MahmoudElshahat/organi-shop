<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class sub_categorie extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = "sub_categories";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'lang',
        'name',
        'image',
        'desc',
        'categorie_id',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
       }
}
