<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class attribuite_value extends Model
{
    use HasFactory;
     use Notifiable;

    protected $table = "attribuite_values";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'attribuite_id',
        'slug',
        'created_at',
        'updated_at'
    ];
}
