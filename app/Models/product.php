<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class product extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table="products";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'desc',
        'image',
        'price',
        'sale',
         'rate',
        'categorie_id',
        'slug',
        'attr_name_id',
        'attr_value_id',
        'descount_Type',
        'quntity',
        'created_at',
        'updated_at'
    ];

    public function cat(){

        return product::with('Categorie')->get();
    }


}//end class




















