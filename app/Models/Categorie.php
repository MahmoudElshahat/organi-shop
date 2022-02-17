<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use MongoDB\BSON\Timestamp;

// use Stancl\Tenancy\Database\Concerns\UsesTenantConnection;

class Categorie extends Model
{
    use HasFactory;

    use Notifiable;

    // use UsesTenantConnection;
    protected $table="categories";

    public $timestamps=false;

    protected $fillable = [
        'id',
        'name',
        'lang',
        'image',
        'slug',
        'created_at',
        'updated_at'
    ];
// =========================================
public function product()
    {
        return $this->belongsTo('App\Models\product');
    }

}//end class
