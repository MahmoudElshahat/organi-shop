<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class attribuite extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = "Attribuites";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];


}
