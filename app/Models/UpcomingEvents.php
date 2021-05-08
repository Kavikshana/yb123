<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingEvents extends Model
{
    use HasFactory;
    protected $table = 'upcoming_events';

    protected $fillable = [

            'Photo',
            'CompanyPersonalEmailID',
            'NameWithInitials',
            'Designation',
            

    ];

}
