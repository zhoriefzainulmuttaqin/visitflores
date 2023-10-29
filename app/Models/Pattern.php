<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'patterns';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
