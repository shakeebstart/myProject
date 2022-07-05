<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Works extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['photo','heading','description'];
    protected $dates=['delete'];
}
