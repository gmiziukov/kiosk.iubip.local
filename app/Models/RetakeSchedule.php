<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetakeSchedule extends Model
{
    use HasFactory;
    protected $fillable = ['fio_teacher', 'date', 'time', 'classroom'];
}
