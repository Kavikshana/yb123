<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academicproject extends Model
{
    use HasFactory;

    protected $fillable = [
        'Destination',
        'LecturerID',
        'ProjectID',
        'Titleoftheproject',
        'Description',
        'Technologies',
        'ProjectType',
        //'ProjectStatus'
        
    ];
}
