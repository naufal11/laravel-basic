<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // * We can use either 'fillable' or 'guarded' here for mass assignment
    protected $guarded = ['id'];
}
