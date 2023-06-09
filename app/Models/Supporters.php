<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporters extends Model
{
    protected $table = 'supporters';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'role', 'email'];
}
