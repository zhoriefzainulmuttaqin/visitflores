<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliators extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'affiliators';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
