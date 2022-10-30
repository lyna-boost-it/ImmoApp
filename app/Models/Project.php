<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
         protected $fillable = [
        'code',
        'type',
        'name',
        'description',
        'address',
        'start_date',
        'end_date',
        'duration',
        'bloc_number',
        'lot_number',
        'charges',
        'additional_charges',
        'vice_preparations',
        'guaranty',
        'delivery_date',
    ];
     protected $dates = ['start_date', 'end_date', 'delivery_date'];
}
