<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    use HasFactory;
    protected $table = 'blocs';
    protected $primaryKey = 'id';
         protected $fillable = [
        'project_id',
        'bloc',
        'floor_number',
        'lot_number',
        'progress_rate',
        'progress_date',
    ];
     protected $dates = ['progress_date'];
}
