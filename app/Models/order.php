<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class order extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = "orders";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'country',
        'Address',
        'apartment',
        'State',
        'city',
        'Postcode',
        'Phone',
        'email',
        'Order_notes',
        'slug',
        'created_at',
        'updated_at',
    ];
}
