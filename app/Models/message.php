<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class message extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = "messages";

    public $timestamps = true;

     protected $fillable = [
        'id',
        'name',
        'email',
        'massage',
        'created_at',
        'updated_at'
     ];
}
