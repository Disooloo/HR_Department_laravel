<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name_company', 'responsible', 'site', 'isVacancy', 'phone', 'email', 'site', 'count_teams', 'address', 'coordinate'];
}
