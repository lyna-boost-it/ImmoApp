<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edd extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'project_id',
        'bloc_id',
        'type_id',
        'floor',
        'orientation',
        'consistance',
        'n_lot_syst',
        'n_lot_edd',
        'living_area',
        'garden_area',
        'terrace_area',
        'global_area',
        'avc',
        'path',
        'progress_date','plan_existence'
    ];
}
