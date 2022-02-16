<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class blog extends Model
{
    use HasFactory;

    use Notifiable;

    protected $table = "blogs";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'comment',
        'image',
        'name',
        'desc',
        'slug',
        'created_at',
        'updated_at'
    ];

}







                                
