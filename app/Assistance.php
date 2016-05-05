<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = 'assistances';

    protected $fillable = ['check_in', 'check_out', 'date', 'work_hours'];
}
