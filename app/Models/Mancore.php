<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mancore extends Model
{
    use HasFactory;

    protected $table = 'mancores';

    protected $guarded = ['id'];

    public $timestamps = false;
}
